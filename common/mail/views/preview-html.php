<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:v="urn:schemas-microsoft-com:vml"
      xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <!--[if gte mso 9]><xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <!-- fix outlook zooming on 120 DPI windows devices -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- So that mobile will display zoomed in -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- enable media queries for windows phone 8 -->
    <meta name="format-detection" content="date=no"> <!-- disable auto date linking in iOS 7-9 -->
    <meta name="format-detection" content="telephone=no"> <!-- disable auto telephone linking in iOS 7-9 -->

    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-spacing: 0;
        }

        table td {
            border-collapse: collapse;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        .ReadMsgBody {
            width: 100%;
            background-color: #ebebeb;
        }

        table {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        .yshortcuts a {
            border-bottom: none !important;
        }

        @media screen and (max-width: 599px) {
            .force-row,
            .container {
                width: 100% !important;
                max-width: 100% !important;
            }
        }
        @media screen and (max-width: 400px) {
            .container-padding {
                padding-left: 12px !important;
                padding-right: 12px !important;
            }
        }
        .ios-footer a {
            color: #aaaaaa !important;
            text-decoration: underline;
        }
        a[href^="x-apple-data-detectors:"],
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }
    </style>
</head>

<body style="margin:0; padding:0;" bgcolor="#F0F0F0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<!-- 100% background wrapper (grey background) -->
<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#F0F0F0">
    <tr>
        <td align="center" valign="top" bgcolor="#F0F0F0" style="background-color: #F0F0F0;">

            <br>

            <!-- 600px container (white background) -->
            <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width:600px;max-width:600px">
                <tr>
                    <td class="container-padding header" align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;padding-bottom:12px;color:#DF4726;padding-left:24px;padding-right:24px">
                        <?php foreach ($sender->postsQueues as $queue){ ?>
                            <h2>???????????? ?????????? ????????????????????: <?= $queue->datePostAt ?></h2>
                        <?} ?>
                    </td>
                </tr>
                <tr>
                    <td class="container-padding content" align="left" style="padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff">
                        <br>

                        <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550">???????????????????? ??????????:</div>
                        <br>

                        <div class="body-text" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333">
                            <h3>??? ??????????: <?= $sender->id ?></h3>
                            <h3>???????????????? ????????????????: <?= $sender->company_name ?></h3>
                            <h3>??????????????????: <?= $sender->position ?></h3>
                            <?php if(isset($sender->descriptivePost))  {?>

                                <h3>???????????????? ??????????????????: <?= $sender->descriptivePost->position_description ?></h3>
                                <h3>???????????? ???????????????????? ??????????: <?= $sender->descriptivePost->salary ?></h3>
                                <h3>???????? ????????????: <?= $sender->descriptivePost->dateStart ?></h3>
                                <h3>???????? ??????????????????: <?= $sender->descriptivePost->dateEnd ?></h3>

                            <?php } ?>

                            <?php if(isset($sender->contactPost))  {?>
                                <!--                <p> --><?//= $sender->contactPost->contact_name ?><!-- ???????????? <p>-->
                                <!--                --><?//= $sender->contactPost['contact_name'] ?><!--  ?????????? <p>-->
                                <!--                --><?//= $sender->contactPost->attributes['contact_name'] ?><!--  ?????????????????? ??????????'-->

                                <h3>???????????????????? ??????: <?= $sender->contactPost->contact_name ?></h3>
                                <h3>???????????????????? Email: <?= $sender->contactPost->contact_email ?></h3>
                            <?php } ?>
                        </div>

                    </td>
                </tr>

            </table>
            <!--/600px container -->


        </td>
    </tr>
</table>
<!--/100% background wrapper-->

</body>
</html>
