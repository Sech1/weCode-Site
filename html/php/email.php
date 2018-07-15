<?php

/**
 * Created by PhpStorm.
 * User: jaredmschooley
 * Author: Jared M Schooley
 * Date: 2/19/18
 * Time: 1:10PM
 */

$emailHead = '<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width">

    <!--[if !mso]><!-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<![endif]-->

    <title>Confirmed, you’ve applied for weCode 2018!</title>


    <!-- Normalize Styles -->
    <style type="text/css">

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops WebKit and Windows mobile clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What is does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* What it does: Remove spacing between tables in Outlook 2007 and up. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        /* What it does: Reset styles. */
        img {
            line-height: 100%;
            outline: none;
            text-decoration: none;
            /* Uses a smoother rendering method when resizing images in IE. */
            -ms-interpolation-mode: bicubic;
            /* Remove border when inside `a` element in IE 8/9/10. */
            border: 0;
            /* Sets a maximum width relative to the parent and auto scales the height */
            max-width: 100%;
            height: auto;
            /* Remove the gap between images and the bottom of their containers */
            vertical-align: middle;
        }

        /* What it does: Overrides styles added when Yahoo\'s auto-senses a link. */
        .yshortcuts a {
            border-bottom: none !important;
        }

        /* What it does: A work-around for iOS meddling in triggered links. */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Neutralize whitespace for inline-block grids on iOS. */
        @media screen and (min-width: 600px) {
            .ios-responsive-grid {
                display: -webkit-box !important;
                display: flex !important;
            }
            /* Alternative method. Not needed if already using the .ios-responsive-grid flex workaround. */
            /* .ios-responsive-grid__unit class would need to be added to the inline-block <div> grid units  */
            .ios-responsive-grid__unit  {
                float: left;
            }
        }



    </style>

    <!--[if gte mso 9]>
    <style type="text/css">
        /* What it does: Normalize space between bullets and text. */
        /* https://litmus.com/community/discussions/1093-bulletproof-lists-using-ul-and-li */
        li {
            text-indent: -1em;
        }
    </style>
    <![endif]-->

    <!-- Progressive Enhancements -->
    <style type="text/css">

        /* Components */

        /* What it does: Hover styles for buttons */
        .button__td,
        .button__a {
            transition: all 100ms ease;
        }

        .button__td:hover,
        .button__a:hover {
            background: #1ab77b !important;
        }



        /* What it does: Mobile optimized styles */
        @media screen and (max-width: 599px) {

            /* Components */



            .tw-card { padding: 20px !important; }
            .tw-h1 { font-size: 22px !important; }



            /* Utilities */

            /* Display */
            .mobile-hidden {
                display: none !important;
            }

            .mobile-d-block {
                display: block !important;
            }

            /* Size */
            .mobile-w-full {
                width: 100% !important;
            }

            /* Margin */
            .mobile-m-h-auto {
                margin: 0 auto !important;
            }

            /* Padding */
            .mobile-p-0 {
                padding: 0 !important;
            }

            .mobile-p-t-0 {
                padding-top: 0 !important;
            }

            /* Images */
            .mobile-img-fluid {
                max-width: 100% !important;
                width: 100% !important;
                height: auto !important;
            }
        }

    </style>
</head>
<body style="background: #ffffff; height: 100% !important; margin: 0 auto !important; padding: 0 !important; width: 100% !important; ;">
<div style="display: none; font-size: 1px; line-height: 1px; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all;">
</div>
<table cellpadding="0" cellspacing="0" style="background: #f2f2f2; border: 0; border-radius: 0; width: 100%;">
    <tbody><tr>
        <td align="center" class="" style="padding: 0 20px;">

            <table cellpadding="0" cellspacing="0" style="background: #f2f2f2; border: 0; border-radius: 0;">
                <tbody><tr>
                    <td align="center" class="" style="width: 600px;">
                        <table cellpadding="0" cellspacing="0" dir="ltr" style="border: 0; width: 100%;">

                            <tbody><tr>
                                <td class="" style="padding: 20px 0; text-align: center; ;">
                                    <a href="wecode.cs.siue.edu" style="text-decoration: none; ;" target="_blank">

                                        <img alt="weCode" class=" " src="http://wecode.cs.siue.edu/images/wecode_email_topAlt.png" style="border: 0; height: auto; max-width: 100%; vertical-align: middle; ;" width="125">

                                    </a>
                                </td>
                            </tr>

                            </tbody></table>
                        <table cellpadding="0" cellspacing="0" style="background: #ffffff; border: 0; border-radius: 4px; width: 100%;">
                            <tbody><tr>
                                <td align="center" class="tw-card" style="padding: 20px 50px;">
                                    <table cellpadding="0" cellspacing="0" dir="ltr" style="border: 0; width: 100%;">

                                        <tbody><tr>
                                            <td class="" style="padding: 20px 0; text-align: center; ;">
                                                <img alt="" class=" " src="http://wecode.cs.siue.edu/images/wecode_email.png" style="border: 0; height: auto; max-width: 100%; vertical-align: middle; ;" width="599">
                                            </td>
                                        </tr>

                                        </tbody></table>

                                    <table cellpadding="0" cellspacing="0" dir="ltr" style="border: 0; width: 100%;">
                                        <tbody><tr>
                                            <td class="" style="padding: 20px 0; text-align: left; color: #474747; font-family: sans-serif;;">
                                                <p style="margin: 20px 0;; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;; ;">
                                                    <span style="font-weight: bold;;">Thank you for applying for weCode!</span>
                                                </p>
                                                <p style="margin: 20px 0;; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;; ;">';

$yesBusEmail = 'you have successfully applied for weCode 2018. <br> <i>Please be aware if you didn\'t upload a permission form with your application you must bring a signed copy with you the day of the event (04/21/2018).</i>
                                                </p>
                                                <p style="margin: 20px 0;; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;; ;">
                                                    The permission form can be found <a href="http://wecode.cs.siue.edu/documents/weCode_Waiver_Form.pdf">here</a>
                                                </p>
                                                <p style="margin: 20px 0;; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;; ;">
                                                    Have questions about the weCode? We\'d love to help! Just email me at <a href="mailto:jaschoo@siue.edu">jaschoo@siue.edu</a>
                                                </p>

                                                <p style="margin: 20px 0;; font-size: 14px; mso-line-height-rule: exactly; line-height: 24px; margin: 30px 0;; margin: 45px 0 0; ;">
                                                    We look forward to seeing you, <br>
                                                    <span style="font-weight: bold;;">weCode Team</span>
                                                </p>

                                            </td>
                                        </tr>

                                        </tbody></table>


                                </td>
                            </tr>
                            </tbody></table>


                        <table cellpadding="0" cellspacing="0" dir="ltr" style="border: 0; width: 100%;">

                            <tbody><tr>
                                <td class="" style="padding: 20px 0; text-align: center; color: #8f8f8f; font-family: sans-serif; font-size: 12px; mso-line-height-rule: exactly; line-height: 20px;;">




                                    <p style="margin: 20px 0;; margin: 0;;">


                                        Made by Jared Schooley at SIUE <a href="https://github.com/Sech1" style="color: #316fea; text-decoration: none;" target="_blank">Git</a>

                                    </p>
                                </td>
                            </tr>

                            </tbody></table>

                    </td>
                </tr>
                </tbody></table>

        </td>
    </tr>
    </tbody></table>

</body>';

DEFINE('EMAIL_HEADER', $emailHead);
DEFINE('SIUE_BUS_EMAIL', $yesBusEmail);

?>