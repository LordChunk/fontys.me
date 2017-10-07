<?php
$email_body = '
    <!doctype html>
    <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
    
    <head>
        <!-- NAME: 1 COLUMN -->
        <!--[if gte mso 15]>
        <xml>
            <o:OfficeDocumentSettings>
                <o:AllowPNG/>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    
        <style type="text/css">
            p{
                margin:10px 0;
                padding:0;
            }
            table{
                border-collapse:collapse;
            }
            h1,h2,h3,h4,h5,h6{
                display:block;
                margin:0;
                padding:0;
            }
            img,a img{
                border:0;
                height:auto;
                outline:none;
                text-decoration:none;
            }
            body,#bodyTable,#bodyCell{
                height:100%;
                margin:0;
                padding:0;
                width:100%;
            }
            .mcnPreviewText{
                display:none !important;
            }
            #outlook a{
                padding:0;
            }
            img{
                -ms-interpolation-mode:bicubic;
            }
            table{
                mso-table-lspace:0pt;
                mso-table-rspace:0pt;
            }
            .ReadMsgBody{
                width:100%;
            }
            .ExternalClass{
                width:100%;
            }
            p,a,li,td,blockquote{
                mso-line-height-rule:exactly;
            }
            a[href^=tel],a[href^=sms]{
                color:inherit;
                cursor:default;
                text-decoration:none;
            }
            p,a,li,td,body,table,blockquote{
                -ms-text-size-adjust:100%;
                -webkit-text-size-adjust:100%;
            }
            .ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
                line-height:100%;
            }
            a[x-apple-data-detectors]{
                color:inherit !important;
                text-decoration:none !important;
                font-size:inherit !important;
                font-family:inherit !important;
                font-weight:inherit !important;
                line-height:inherit !important;
            }
            #bodyCell{
                padding:10px;
            }
            .templateContainer{
                max-width:600px !important;
            }
            a.mcnButton{
                display:block;
            }
            .mcnImage{
                vertical-align:bottom;
            }
            .mcnTextContent{
                word-break:break-word;
            }
            .mcnTextContent img{
                height:auto !important;
            }
            .mcnDividerBlock{
                table-layout:fixed !important;
            }
            /*
            @tab Page
            @section Background Style
            @tip Set the background color and top border for your email. You may want to choose colors that match your company\'s branding.
            */
            body,#bodyTable{
                /*@editable*/background-color:#FAFAFA;
            }
            /*
            @tab Page
            @section Background Style
            @tip Set the background color and top border for your email. You may want to choose colors that match your company\'s branding.
            */
            #bodyCell{
                /*@editable*/border-top:0;
            }
            /*
            @tab Page
            @section Email Border
            @tip Set the border for your email.
            */
            .templateContainer{
                /*@editable*/border:0;
            }
            /*
            @tab Page
            @section Heading 1
            @tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
            @style heading 1
            */
            h1{
                /*@editable*/color:#202020;
                /*@editable*/font-family:Helvetica;
                /*@editable*/font-size:26px;
                /*@editable*/font-style:normal;
                /*@editable*/font-weight:bold;
                /*@editable*/line-height:125%;
                /*@editable*/letter-spacing:normal;
                /*@editable*/text-align:left;
            }
            /*
            @tab Page
            @section Heading 2
            @tip Set the styling for all second-level headings in your emails.
            @style heading 2
            */
            h2{
                /*@editable*/color:#202020;
                /*@editable*/font-family:Helvetica;
                /*@editable*/font-size:22px;
                /*@editable*/font-style:normal;
                /*@editable*/font-weight:bold;
                /*@editable*/line-height:125%;
                /*@editable*/letter-spacing:normal;
                /*@editable*/text-align:left;
            }
            /*
            @tab Page
            @section Heading 3
            @tip Set the styling for all third-level headings in your emails.
            @style heading 3
            */
            h3{
                /*@editable*/color:#202020;
                /*@editable*/font-family:Helvetica;
                /*@editable*/font-size:20px;
                /*@editable*/font-style:normal;
                /*@editable*/font-weight:bold;
                /*@editable*/line-height:125%;
                /*@editable*/letter-spacing:normal;
                /*@editable*/text-align:left;
            }
            /*
            @tab Page
            @section Heading 4
            @tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
            @style heading 4
            */
            h4{
                /*@editable*/color:#202020;
                /*@editable*/font-family:Helvetica;
                /*@editable*/font-size:18px;
                /*@editable*/font-style:normal;
                /*@editable*/font-weight:bold;
                /*@editable*/line-height:125%;
                /*@editable*/letter-spacing:normal;
                /*@editable*/text-align:left;
            }
            /*
            @tab Preheader
            @section Preheader Style
            @tip Set the background color and borders for your email\'s preheader area.
            */
            #templatePreheader{
                /*@editable*/background-color:#FAFAFA;
                /*@editable*/background-image:none;
                /*@editable*/background-repeat:no-repeat;
                /*@editable*/background-position:center;
                /*@editable*/background-size:cover;
                /*@editable*/border-top:0;
                /*@editable*/border-bottom:0;
                /*@editable*/padding-top:9px;
                /*@editable*/padding-bottom:9px;
            }
            /*
            @tab Preheader
            @section Preheader Text
            @tip Set the styling for your email\'s preheader text. Choose a size and color that is easy to read.
            */
            #templatePreheader .mcnTextContent,#templatePreheader .mcnTextContent p{
                /*@editable*/color:#656565;
                /*@editable*/font-family:Helvetica;
                /*@editable*/font-size:12px;
                /*@editable*/line-height:150%;
                /*@editable*/text-align:left;
            }
            /*
            @tab Preheader
            @section Preheader Link
            @tip Set the styling for your email\'s preheader links. Choose a color that helps them stand out from your text.
            */
            #templatePreheader .mcnTextContent a,#templatePreheader .mcnTextContent p a{
                /*@editable*/color:#656565;
                /*@editable*/font-weight:normal;
                /*@editable*/text-decoration:underline;
            }
            /*
            @tab Header
            @section Header Style
            @tip Set the background color and borders for your email\'s header area.
            */
            #templateHeader{
                /*@editable*/background-color:#FFFFFF;
                /*@editable*/background-image:none;
                /*@editable*/background-repeat:no-repeat;
                /*@editable*/background-position:center;
                /*@editable*/background-size:cover;
                /*@editable*/border-top:0;
                /*@editable*/border-bottom:0;
                /*@editable*/padding-top:9px;
                /*@editable*/padding-bottom:0;
            }
            /*
            @tab Header
            @section Header Text
            @tip Set the styling for your email\'s header text. Choose a size and color that is easy to read.
            */
            #templateHeader .mcnTextContent,#templateHeader .mcnTextContent p{
                /*@editable*/color:#202020;
                /*@editable*/font-family:Helvetica;
                /*@editable*/font-size:16px;
                /*@editable*/line-height:150%;
                /*@editable*/text-align:left;
            }
            /*
            @tab Header
            @section Header Link
            @tip Set the styling for your email\'s header links. Choose a color that helps them stand out from your text.
            */
            #templateHeader .mcnTextContent a,#templateHeader .mcnTextContent p a{
                /*@editable*/color:#2BAADF;
                /*@editable*/font-weight:normal;
                /*@editable*/text-decoration:underline;
            }
            /*
            @tab Body
            @section Body Style
            @tip Set the background color and borders for your email\'s body area.
            */
            #templateBody{
                /*@editable*/background-color:#FFFFFF;
                /*@editable*/background-image:none;
                /*@editable*/background-repeat:no-repeat;
                /*@editable*/background-position:center;
                /*@editable*/background-size:cover;
                /*@editable*/border-top:0;
                /*@editable*/border-bottom:2px solid #EAEAEA;
                /*@editable*/padding-top:0;
                /*@editable*/padding-bottom:9px;
            }
            /*
            @tab Body
            @section Body Text
            @tip Set the styling for your email\'s body text. Choose a size and color that is easy to read.
            */
            #templateBody .mcnTextContent,#templateBody .mcnTextContent p{
                /*@editable*/color:#202020;
                /*@editable*/font-family:Helvetica;
                /*@editable*/font-size:16px;
                /*@editable*/line-height:150%;
                /*@editable*/text-align:left;
            }
            /*
            @tab Body
            @section Body Link
            @tip Set the styling for your email\'s body links. Choose a color that helps them stand out from your text.
            */
            #templateBody .mcnTextContent a,#templateBody .mcnTextContent p a{
                /*@editable*/color:#2BAADF;
                /*@editable*/font-weight:normal;
                /*@editable*/text-decoration:underline;
            }
            /*
            @tab Footer
            @section Footer Style
            @tip Set the background color and borders for your email\'s footer area.
            */
            #templateFooter{
                /*@editable*/background-color:#FAFAFA;
                /*@editable*/background-image:none;
                /*@editable*/background-repeat:no-repeat;
                /*@editable*/background-position:center;
                /*@editable*/background-size:cover;
                /*@editable*/border-top:0;
                /*@editable*/border-bottom:0;
                /*@editable*/padding-top:9px;
                /*@editable*/padding-bottom:9px;
            }
            /*
            @tab Footer
            @section Footer Text
            @tip Set the styling for your email\'s footer text. Choose a size and color that is easy to read.
            */
            #templateFooter .mcnTextContent,#templateFooter .mcnTextContent p{
                /*@editable*/color:#656565;
                /*@editable*/font-family:Helvetica;
                /*@editable*/font-size:12px;
                /*@editable*/line-height:150%;
                /*@editable*/text-align:center;
            }
            /*
            @tab Footer
            @section Footer Link
            @tip Set the styling for your email\'s footer links. Choose a color that helps them stand out from your text.
            */
            #templateFooter .mcnTextContent a,#templateFooter .mcnTextContent p a{
                /*@editable*/color:#656565;
                /*@editable*/font-weight:normal;
                /*@editable*/text-decoration:underline;
            }
            @media only screen and (min-width:768px){
                .templateContainer{
                    width:600px !important;
                }
    
            }	@media only screen and (max-width: 480px){
                body,table,td,p,a,li,blockquote{
                    -webkit-text-size-adjust:none !important;
                }
    
            }	@media only screen and (max-width: 480px){
                body{
                    width:100% !important;
                    min-width:100% !important;
                }
    
            }	@media only screen and (max-width: 480px){
                #bodyCell{
                    padding-top:10px !important;
                }
    
            }	@media only screen and (max-width: 480px){
                .mcnImage{
                    width:100% !important;
                }
    
            }	@media only screen and (max-width: 480px){
                .mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer{
                    max-width:100% !important;
                    width:100% !important;
                }
    
            }	@media only screen and (max-width: 480px){
                .mcnBoxedTextContentContainer{
                    min-width:100% !important;
                }
    
            }	@media only screen and (max-width: 480px){
                .mcnImageGroupContent{
                    padding:9px !important;
                }
    
            }	@media only screen and (max-width: 480px){
                .mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{
                    padding-top:9px !important;
                }
    
            }	@media only screen and (max-width: 480px){
                .mcnImageCardTopImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
                    padding-top:18px !important;
                }
    
            }	@media only screen and (max-width: 480px){
                .mcnImageCardBottomImageContent{
                    padding-bottom:9px !important;
                }
    
            }	@media only screen and (max-width: 480px){
                .mcnImageGroupBlockInner{
                    padding-top:0 !important;
                    padding-bottom:0 !important;
                }
    
            }	@media only screen and (max-width: 480px){
                .mcnImageGroupBlockOuter{
                    padding-top:9px !important;
                    padding-bottom:9px !important;
                }
    
            }	@media only screen and (max-width: 480px){
                .mcnTextContent,.mcnBoxedTextContentColumn{
                    padding-right:18px !important;
                    padding-left:18px !important;
                }
    
            }	@media only screen and (max-width: 480px){
                .mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{
                    padding-right:18px !important;
                    padding-bottom:0 !important;
                    padding-left:18px !important;
                }
    
            }	@media only screen and (max-width: 480px){
                .mcpreview-image-uploader{
                    display:none !important;
                    width:100% !important;
                }
    
            }	@media only screen and (max-width: 480px){
                /*
                @tab Mobile Styles
                @section Heading 1
                @tip Make the first-level headings larger in size for better readability on small screens.
                */
                h1{
                    /*@editable*/font-size:22px !important;
                    /*@editable*/line-height:125% !important;
                }
    
            }	@media only screen and (max-width: 480px){
                /*
                @tab Mobile Styles
                @section Heading 2
                @tip Make the second-level headings larger in size for better readability on small screens.
                */
                h2{
                    /*@editable*/font-size:20px !important;
                    /*@editable*/line-height:125% !important;
                }
    
            }	@media only screen and (max-width: 480px){
                /*
                @tab Mobile Styles
                @section Heading 3
                @tip Make the third-level headings larger in size for better readability on small screens.
                */
                h3{
                    /*@editable*/font-size:18px !important;
                    /*@editable*/line-height:125% !important;
                }
    
            }	@media only screen and (max-width: 480px){
                /*
                @tab Mobile Styles
                @section Heading 4
                @tip Make the fourth-level headings larger in size for better readability on small screens.
                */
                h4{
                    /*@editable*/font-size:16px !important;
                    /*@editable*/line-height:150% !important;
                }
    
            }	@media only screen and (max-width: 480px){
                /*
                @tab Mobile Styles
                @section Boxed Text
                @tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.
                */
                .mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{
                    /*@editable*/font-size:14px !important;
                    /*@editable*/line-height:150% !important;
                }
    
            }	@media only screen and (max-width: 480px){
                /*
                @tab Mobile Styles
                @section Preheader Visibility
                @tip Set the visibility of the email\'s preheader on small screens. You can hide it to save space.
                */
                #templatePreheader{
                    /*@editable*/display:block !important;
                }
    
            }	@media only screen and (max-width: 480px){
                /*
                @tab Mobile Styles
                @section Preheader Text
                @tip Make the preheader text larger in size for better readability on small screens.
                */
                #templatePreheader .mcnTextContent,#templatePreheader .mcnTextContent p{
                    /*@editable*/font-size:14px !important;
                    /*@editable*/line-height:150% !important;
                }
    
            }	@media only screen and (max-width: 480px){
                /*
                @tab Mobile Styles
                @section Header Text
                @tip Make the header text larger in size for better readability on small screens.
                */
                #templateHeader .mcnTextContent,#templateHeader .mcnTextContent p{
                    /*@editable*/font-size:16px !important;
                    /*@editable*/line-height:150% !important;
                }
    
            }	@media only screen and (max-width: 480px){
                /*
                @tab Mobile Styles
                @section Body Text
                @tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.
                */
                #templateBody .mcnTextContent,#templateBody .mcnTextContent p{
                    /*@editable*/font-size:16px !important;
                    /*@editable*/line-height:150% !important;
                }
    
            }	@media only screen and (max-width: 480px){
                /*
                @tab Mobile Styles
                @section Footer Text
                @tip Make the footer content text larger in size for better readability on small screens.
                */
                #templateFooter .mcnTextContent,#templateFooter .mcnTextContent p{
                    /*@editable*/font-size:14px !important;
                    /*@editable*/line-height:150% !important;
                }
    
            }
        </style>
    </head>
    
    <body>
    <!--*|IF:MC_PREVIEW_TEXT|*-->
    <!--[if !gte mso 9]><!----><span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;"></span>
    <!--<![endif]-->
    <!--*|END:IF|*-->
    <center>
        <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
            <tr>
                <td align="center" valign="top" id="bodyCell">
                    <!-- BEGIN TEMPLATE // -->
                    <!--[if gte mso 9]>
                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                        <tr>
                            <td align="center" valign="top" width="600" style="width:600px;">
                    <![endif]-->
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                        <tr>
                            <td valign="top" id="templatePreheader">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
                                    <tbody class="mcnTextBlockOuter">
                                    <tr>
                                        <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                                            <!--[if mso]>
                                            <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                                                <tr>
                                            <![endif]-->
    
                                            <!--[if mso]>
                                            <td valign="top" width="600" style="width:600px;">
                                            <![endif]-->
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                                                <tbody>
                                                <tr>
    
                                                    <td valign="top" class="mcnTextContent" style="padding: 0px 18px 9px; text-align: center;">
    
                                                        <!--<a href="*|ARCHIVE|*" target="_blank">View this email in your browser</a>-->
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!--[if mso]>
                                            </td>
                                            <![endif]-->
    
                                            <!--[if mso]>
                                            </tr>
                                            </table>
                                            <![endif]-->
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" id="templateHeader">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
                                    <tbody class="mcnImageBlockOuter">
                                    <tr>
                                        <td valign="top" style="padding:9px" class="mcnImageBlockInner">
                                            <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                                                <tbody>
                                                <tr>
                                                    <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">
                                                        <a href="http://'.$_SERVER["SERVER_NAME"].'" target="_blank">
                                                            <img align="center" alt="logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAu8AAAEsCAYAAABzF13WAAAACXBIWXMAAAsTAAALEwEAmpwYAAA6H2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxMzggNzkuMTU5ODI0LCAyMDE2LzA5LzE0LTAxOjA5OjAxICAgICAgICAiPgogICA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPgogICAgICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgICAgICAgICB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iCiAgICAgICAgICAgIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIKICAgICAgICAgICAgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIgogICAgICAgICAgICB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIKICAgICAgICAgICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgICAgICAgICAgeG1sbnM6dGlmZj0iaHR0cDovL25zLmFkb2JlLmNvbS90aWZmLzEuMC8iCiAgICAgICAgICAgIHhtbG5zOmV4aWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vZXhpZi8xLjAvIj4KICAgICAgICAgPHhtcDpDcmVhdGVEYXRlPjIwMTctMTAtMDVUMTU6MDg6MDkrMDI6MDA8L3htcDpDcmVhdGVEYXRlPgogICAgICAgICA8eG1wOk1vZGlmeURhdGU+MjAxNy0xMC0wNVQxNToyNDozOSswMjowMDwveG1wOk1vZGlmeURhdGU+CiAgICAgICAgIDx4bXA6TWV0YWRhdGFEYXRlPjIwMTctMTAtMDVUMTU6MjQ6MzkrMDI6MDA8L3htcDpNZXRhZGF0YURhdGU+CiAgICAgICAgIDx4bXA6Q3JlYXRvclRvb2w+QWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpPC94bXA6Q3JlYXRvclRvb2w+CiAgICAgICAgIDxkYzpmb3JtYXQ+aW1hZ2UvcG5nPC9kYzpmb3JtYXQ+CiAgICAgICAgIDxwaG90b3Nob3A6Q29sb3JNb2RlPjM8L3Bob3Rvc2hvcDpDb2xvck1vZGU+CiAgICAgICAgIDx4bXBNTTpJbnN0YW5jZUlEPnhtcC5paWQ6MGVhNjA0OTItMjVlMi1kMDQ0LWE5NDQtMDU3NzkwYmRmYjVkPC94bXBNTTpJbnN0YW5jZUlEPgogICAgICAgICA8eG1wTU06RG9jdW1lbnRJRD5hZG9iZTpkb2NpZDpwaG90b3Nob3A6ODlmYWRmNmYtYTlkMC0xMWU3LTlkYmQtZjY4NDg4ODA4ODk4PC94bXBNTTpEb2N1bWVudElEPgogICAgICAgICA8eG1wTU06T3JpZ2luYWxEb2N1bWVudElEPnhtcC5kaWQ6MDQ4Zjc2NGQtMThhZS0yZjRmLTgxYjQtZTkzYTVmMjAzNGVlPC94bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ+CiAgICAgICAgIDx4bXBNTTpIaXN0b3J5PgogICAgICAgICAgICA8cmRmOlNlcT4KICAgICAgICAgICAgICAgPHJkZjpsaSByZGY6cGFyc2VUeXBlPSJSZXNvdXJjZSI+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDphY3Rpb24+c2F2ZWQ8L3N0RXZ0OmFjdGlvbj4KICAgICAgICAgICAgICAgICAgPHN0RXZ0Omluc3RhbmNlSUQ+eG1wLmlpZDowNDhmNzY0ZC0xOGFlLTJmNGYtODFiNC1lOTNhNWYyMDM0ZWU8L3N0RXZ0Omluc3RhbmNlSUQ+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDp3aGVuPjIwMTctMTAtMDVUMTU6MjQ6MzkrMDI6MDA8L3N0RXZ0OndoZW4+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDpzb2Z0d2FyZUFnZW50PkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChXaW5kb3dzKTwvc3RFdnQ6c29mdHdhcmVBZ2VudD4KICAgICAgICAgICAgICAgICAgPHN0RXZ0OmNoYW5nZWQ+Lzwvc3RFdnQ6Y2hhbmdlZD4KICAgICAgICAgICAgICAgPC9yZGY6bGk+CiAgICAgICAgICAgICAgIDxyZGY6bGkgcmRmOnBhcnNlVHlwZT0iUmVzb3VyY2UiPgogICAgICAgICAgICAgICAgICA8c3RFdnQ6YWN0aW9uPnNhdmVkPC9zdEV2dDphY3Rpb24+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDppbnN0YW5jZUlEPnhtcC5paWQ6MGVhNjA0OTItMjVlMi1kMDQ0LWE5NDQtMDU3NzkwYmRmYjVkPC9zdEV2dDppbnN0YW5jZUlEPgogICAgICAgICAgICAgICAgICA8c3RFdnQ6d2hlbj4yMDE3LTEwLTA1VDE1OjI0OjM5KzAyOjAwPC9zdEV2dDp3aGVuPgogICAgICAgICAgICAgICAgICA8c3RFdnQ6c29mdHdhcmVBZ2VudD5BZG9iZSBQaG90b3Nob3AgQ0MgMjAxNyAoV2luZG93cyk8L3N0RXZ0OnNvZnR3YXJlQWdlbnQ+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDpjaGFuZ2VkPi88L3N0RXZ0OmNoYW5nZWQ+CiAgICAgICAgICAgICAgIDwvcmRmOmxpPgogICAgICAgICAgICA8L3JkZjpTZXE+CiAgICAgICAgIDwveG1wTU06SGlzdG9yeT4KICAgICAgICAgPHRpZmY6T3JpZW50YXRpb24+MTwvdGlmZjpPcmllbnRhdGlvbj4KICAgICAgICAgPHRpZmY6WFJlc29sdXRpb24+NzIwMDAwLzEwMDAwPC90aWZmOlhSZXNvbHV0aW9uPgogICAgICAgICA8dGlmZjpZUmVzb2x1dGlvbj43MjAwMDAvMTAwMDA8L3RpZmY6WVJlc29sdXRpb24+CiAgICAgICAgIDx0aWZmOlJlc29sdXRpb25Vbml0PjI8L3RpZmY6UmVzb2x1dGlvblVuaXQ+CiAgICAgICAgIDxleGlmOkNvbG9yU3BhY2U+NjU1MzU8L2V4aWY6Q29sb3JTcGFjZT4KICAgICAgICAgPGV4aWY6UGl4ZWxYRGltZW5zaW9uPjc1MTwvZXhpZjpQaXhlbFhEaW1lbnNpb24+CiAgICAgICAgIDxleGlmOlBpeGVsWURpbWVuc2lvbj4zMDA8L2V4aWY6UGl4ZWxZRGltZW5zaW9uPgogICAgICA8L3JkZjpEZXNjcmlwdGlvbj4KICAgPC9yZGY6UkRGPgo8L3g6eG1wbWV0YT4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAKPD94cGFja2V0IGVuZD0idyI/PkWWpQ0AAAAgY0hSTQAAeiUAAICDAAD5/wAAgOkAAHUwAADqYAAAOpgAABdvkl/FRgAAC1hJREFUeNrs3Ut24zYURVESi3PJnDOATNNppWJX+UNJAImLt3cr6VTZkgge30Un+1///L0BBHt798+7lwOAlTUvAbBIuP/3729eFgDEO0Bu1AOAeAcQ8AAg3gF6BbyIB0C8A4RFPACId4AbPfJfl7HCAyDeAcIIeADEO0BYwIt4AMQ7QFjEA4B4BwgKeBEPgHgHuMDe6c8R8ACId4AgVngAxDtAYMQDgHgHEPAAIN6BuvZBf67HaAAQ7wBhBDwA4h0gLOBFPADiHSAs4gFAvAO8YL/w77LCAyDeAcIIeADEO0BYwIt4AMQ7QFjEA4B4Bzhpv/nvF/AAiHeAIB6jAUC8AwRGPACId4CggBfxAIh3gC/sE35NAh4A8Q4QxAoPgHgHCIx4ABDvAEEBL+IBEO8AYREP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" width="150" style="max-width:150px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                                                        </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
                                    <tbody class="mcnDividerBlockOuter">
                                    <tr>
                                        <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                                            <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px solid #EAEAEA;">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <span></span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!--
                                            <td class="mcnDividerBlockInner" style="padding: 18px;">
                                            <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
                            -->
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" id="templateBody">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
                                    <tbody class="mcnTextBlockOuter">
                                    <tr>
                                        <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                                            <!--[if mso]>
                                            <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                                                <tr>
                                            <![endif]-->
    
                                            <!--[if mso]>
                                            <td valign="top" width="600" style="width:600px;">
                                            <![endif]-->
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                                                <tbody>
                                                <tr>
    
                                                    <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
    
                                                        <h1>Beste '. $teacher_name . ',</h1>
    
                                                        <p>Het spijt mij u te moeten mededelen dat ik vandaag niet tijdig aanwezig kan zijn in uw les.<br> Ik hoop rond ' . $time . ' aanwezig te zijn.<br> &nbsp;
                                                            <br> Reden: '. $reason .'</p>
                                                        <p>Met vriendelijke groet,<br>
                                                            '. $student_name .'
                                                        </p>
    
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!--[if mso]>
                                            </td>
                                            <![endif]-->
    
                                            <!--[if mso]>
                                            </tr>
                                            </table>
                                            <![endif]-->
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" id="templateFooter">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
                                    <tbody class="mcnTextBlockOuter">
                                    <tr>
                                        <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                                            <!--[if mso]>
                                            <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                                                <tr>
                                            <![endif]-->
    
                                            <!--[if mso]>
                                            <td valign="top" width="600" style="width:600px;">
                                            <![endif]-->
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                                                <tbody>
                                                <tr>
    
                                                    <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
    
                                                        <em>Verstuurd via: <a href="http://'.$_SERVER["SERVER_NAME"].'" target="_blank">http://'.$_SERVER["SERVER_NAME"].'</a>.</em><br>
                                                        <br> Mail adres&nbsp;van '. $student_name.':&nbsp;<a href="mailto:'.$student_email.'" target="_blank">'.$student_email.'</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!--[if mso]>
                                            </td>
                                            <![endif]-->
    
                                            <!--[if mso]>
                                            </tr>
                                            </table>
                                            <![endif]-->
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <!--[if gte mso 9]>
                    </td>
                    </tr>
                    </table>
                    <![endif]-->
                    <!-- // END TEMPLATE -->
                </td>
            </tr>
        </table>
    </center>
    </body>
    
    </html>
';

echo "email body test output <br>";