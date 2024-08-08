<!doctype html>
<html lang="en-US">
<?php 
$app_setting = $this->setting_model->get_all_app_setting(); 
$this->db->where('id', $this->session->userdata('register_event_id'));
$event = $this->db->get('event')->row(); 
?>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>New Account Email Template</title>
    <meta name="description" content="New Account Email Template.">
    <style type="text/css">
        a:hover {
            text-decoration: underline !important;
        }
    </style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
    <!-- 100% body table -->
    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8" style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td>
                <table style="background-color: #f2f3f8; max-width:670px; margin:0 auto;" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                            <a href="<?php echo base_url(); ?>" title="logo" target="_blank">
                                <img width="190" src="<?php echo base_url(); ?><?php echo $app_setting->app_sticky_logo; ?>" title="logo" alt="<?php echo $app_setting->app_name; ?>">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <table width="95%" border="0" align="left" cellpadding="0" cellspacing="0" style="max-width:670px; background:#fff; border-radius:3px; text-align:left;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="padding:0 35px;">
                                        <main>
                                            <p>
                                                Hello <?php echo $data['client_name'];  ?>,
                                            </p>

                                            <p>
                                                Thank you for booking a seat for our upcoming event. We are thrilled to have you join us!
                                            </p>

                                            <p>
                                                <strong>Event Details:</strong><br>
                                                <strong>Event Name:</strong> <?php echo $event->title; ?><br>
                                                <strong>Date:</strong> <?php echo date('d-m-Y', strtotime($event->date_time)); ?><br>
                                                <strong>Time:</strong> <?php echo date('h:i a', strtotime($event->date_time)); ?><br>
                                                <strong>Location:</strong> <?php echo $event->event_location; ?>
                                            </p>

                                            <p>
                                                Please keep this confirmation email for your records. If you have any questions or need further assistance, feel free to contact us at <a href="mailto:support@yogintra.com">support@yogintra.com</a>.
                                            </p>

                                            <p>
                                                We look forward to seeing you at the event!
                                            </p>

                                            <p>
                                                Best regards,<br>
                                                YogIntra
                                            </p>
                                        </main>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                            <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">&copy; <strong>www.yogintra.com</strong> </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--/100% body table-->
</body>

</html>