{{-- <!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8"><title>{{$mailMessage->title}}</title>
    </head>
    <body>
        Dear {{$mailMessage->recieverName}} !
        <p>Thank You for contacting us. We will revert back on your query
with in 24 Hours.</p>
<p></p>
Thank You,
<br/>
{{ $mailMessage->sender }}
<br/>
{{ $mailMessage->senderCompany}}
    </body>
</html>

<!DOCTYPE html> --}}

<html
  lang="en"
  xmlns:o="urn:schemas-microsoft-com:office:office"
  xmlns:v="urn:schemas-microsoft-com:vml"
>
  <head>
    {{-- <title></title> --}}
    <meta charset="utf-8"><title>{{$mailMessage->title}}</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!--[if mso
      ]><xml
        ><o:OfficeDocumentSettings
          ><o:PixelsPerInch>96</o:PixelsPerInch
          ><o:AllowPNG /></o:OfficeDocumentSettings></xml
    ><![endif]-->
    <!--[if !mso]><!-->
    <link
      href="https://fonts.googleapis.com/css?family=Nunito"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Oswald"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto+Slab"
      rel="stylesheet"
      type="text/css"
    />
    <!--<![endif]-->
    <style>
      * {
        box-sizing: border-box;
      }

      body {
        margin: 0;
        padding: 0;
      }

      a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: inherit !important;
      }

      #MessageViewBody a {
        color: inherit;
        text-decoration: none;
      }

      p {
        line-height: inherit;
      }

      .desktop_hide,
      .desktop_hide table {
        mso-hide: all;
        display: none;
        max-height: 0px;
        overflow: hidden;
      }

      .menu_block.desktop_hide .menu-links span {
        mso-hide: all;
      }

      @media (max-width: 700px) {
        .desktop_hide table.icons-inner {
          display: inline-block !important;
        }

        .icons-inner {
          text-align: center;
        }

        .icons-inner td {
          margin: 0 auto;
        }

        .image_block img.big,
        .row-content {
          width: 100% !important;
        }

        .menu-checkbox[type="checkbox"] ~ .menu-links {
          display: none !important;
          padding: 5px 0;
        }

        .menu-checkbox[type="checkbox"]:checked ~ .menu-trigger .menu-open,
        .menu-checkbox[type="checkbox"] ~ .menu-links span.sep {
          display: none !important;
        }

        .menu-checkbox[type="checkbox"]:checked ~ .menu-links,
        .menu-checkbox[type="checkbox"] ~ .menu-trigger {
          display: block !important;
          max-width: none !important;
          max-height: none !important;
          font-size: inherit !important;
        }

        .menu-checkbox[type="checkbox"] ~ .menu-links > a,
        .menu-checkbox[type="checkbox"] ~ .menu-links > span.label {
          display: block !important;
          text-align: center;
        }

        .menu-checkbox[type="checkbox"]:checked ~ .menu-trigger .menu-close {
          display: block !important;
        }

        .mobile_hide {
          display: none;
        }

        .stack .column {
          width: 100%;
          display: block;
        }

        .mobile_hide {
          min-height: 0;
          max-height: 0;
          max-width: 0;
          overflow: hidden;
          font-size: 0px;
        }

        .desktop_hide,
        .desktop_hide table {
          display: table !important;
          max-height: none !important;
        }
      }
    </style>
  </head>
  <body
    style="
      background-color: #ffffff;
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: none;
      text-size-adjust: none;
    "
  >
    <table
      border="0"
      cellpadding="0"
      cellspacing="0"
      class="nl-container"
      role="presentation"
      style="
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        background-color: #ffffff;
      "
      width="100%"
    >
      <tbody>
        <tr>
          <td>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-1"
              role="presentation"
              style="mso-table-lspace: 0pt; mso-table-rspace: 0pt"
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="50%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="empty_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-right: 0px;
                                    padding-bottom: 5px;
                                    padding-left: 0px;
                                    padding-top: 5px;
                                  "
                                >
                                  <div></div>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <td
                            class="column column-2"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="50%"
                          >
                            <div
                              class="spacer_block"
                              style="
                                height: 5px;
                                line-height: 5px;
                                font-size: 1px;
                              "
                            >
                               
                            </div>
                            <div
                              class="spacer_block mobile_hide"
                              style="
                                height: 55px;
                                line-height: 55px;
                                font-size: 1px;
                              "
                            >
                               
                            </div>
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="menu_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    color: #000000;
                                    font-family: 'Roboto Slab', Arial,
                                      'Helvetica Neue', Helvetica, sans-serif;
                                    font-size: 14px;
                                    padding-bottom: 10px;
                                    padding-top: 15px;
                                    text-align: right;
                                  "
                                >
                                  <table
                                    border="0"
                                    cellpadding="0"
                                    cellspacing="0"
                                    role="presentation"
                                    style="
                                      mso-table-lspace: 0pt;
                                      mso-table-rspace: 0pt;
                                    "
                                    width="100%"
                                  >
                                    <tr>
                                      <td
                                        style="
                                          text-align: right;
                                          font-size: 0px;
                                        "
                                      >
                                        <!--[if !mso
                                        ]><!--><input
                                          class="menu-checkbox"
                                          id="menu012"
                                          style="
                                            display: none !important;
                                            max-height: 0;
                                            visibility: hidden;
                                          "
                                          type="checkbox"
                                        />
                                        <!--<![endif]-->
                                        <div
                                          class="menu-trigger"
                                          style="
                                            display: none;
                                            max-height: 0px;
                                            max-width: 0px;
                                            font-size: 0px;
                                            overflow: hidden;
                                          "
                                        >
                                          <label
                                            class="menu-label"
                                            for="menu012"
                                            style="
                                              height: 36px;
                                              width: 36px;
                                              display: inline-block;
                                              cursor: pointer;
                                              mso-hide: all;
                                              user-select: none;
                                              align: right;
                                              text-align: center;
                                              color: #ffffff;
                                              text-decoration: none;
                                              background-color: #3fb9bc;
                                            "
                                            ><span
                                              class="menu-open"
                                              style="
                                                mso-hide: all;
                                                font-size: 26px;
                                                line-height: 36px;
                                              "
                                              >☰</span
                                            ><span
                                              class="menu-close"
                                              style="
                                                display: none;
                                                mso-hide: all;
                                                font-size: 26px;
                                                line-height: 36px;
                                              "
                                              >✕</span
                                            ></label
                                          >
                                        </div>
                                        <div class="menu-links">
                                          <!--[if mso]>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" style="">
<tr>
<td style="padding-top:20px;padding-right:20px;padding-bottom:15px;padding-left:20px">
<!
                                          [endif]--><a
                                            href="http://biddersportal.com/"
                                            style="
                                              padding-top: 20px;
                                              padding-bottom: 15px;
                                              padding-left: 20px;
                                              padding-right: 20px;
                                              display: inline-block;
                                              color: #0068a5;
                                              font-family: 'Roboto Slab', Arial,
                                                'Helvetica Neue', Helvetica,
                                                sans-serif;
                                              font-size: 14px;
                                              text-decoration: none;
                                              letter-spacing: normal;
                                            "
                                            >Home</a
                                          >
                                          <!--[if mso]></td><td><!
                                          [endif]--><span
                                            class="sep"
                                            style="
                                              font-size: 14px;
                                              font-family: 'Roboto Slab', Arial,
                                                'Helvetica Neue', Helvetica,
                                                sans-serif;
                                              color: #000000;
                                            "
                                            >-</span
                                          >
                                          <!--[if mso]></td><![endif]-->
                                          <!--[if mso]></td><td style="padding-top:20px;padding-right:20px;padding-bottom:15px;padding-left:20px"><!
                                          [endif]--><a
                                            href="https://www.biddersportal.com/listing"
                                            style="
                                              padding-top: 20px;
                                              padding-bottom: 15px;
                                              padding-left: 20px;
                                              padding-right: 20px;
                                              display: inline-block;
                                              color: #0068a5;
                                              font-family: 'Roboto Slab', Arial,
                                                'Helvetica Neue', Helvetica,
                                                sans-serif;
                                              font-size: 14px;
                                              text-decoration: none;
                                              letter-spacing: normal;
                                            "
                                            >Tender Listings</a
                                          >
                                          <!--[if mso]></td><td><!
                                          [endif]--><span
                                            class="sep"
                                            style="
                                              font-size: 14px;
                                              font-family: 'Roboto Slab', Arial,
                                                'Helvetica Neue', Helvetica,
                                                sans-serif;
                                              color: #000000;
                                            "
                                            >-</span
                                          >
                                          <!--[if mso]></td><![endif]-->
                                          <!--[if mso]></td><td style="padding-top:20px;padding-right:20px;padding-bottom:15px;padding-left:20px"><!
                                          [endif]--><a
                                            href="https://www.biddersportal.com/about"
                                            style="
                                              padding-top: 20px;
                                              padding-bottom: 15px;
                                              padding-left: 20px;
                                              padding-right: 20px;
                                              display: inline-block;
                                              color: #0068a5;
                                              font-family: 'Roboto Slab', Arial,
                                                'Helvetica Neue', Helvetica,
                                                sans-serif;
                                              font-size: 14px;
                                              text-decoration: none;
                                              letter-spacing: normal;
                                            "
                                            >About</a
                                          >
                                          <!--[if mso]></td></tr></table><![endif]-->
                                        </div>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-2"
              role="presentation"
              style="
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
                background-color: #e8f4dc;
              "
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content stack"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        background-position: center top;
                        background-color: #e8f4dc;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              padding-top: 0px;
                              padding-bottom: 0px;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="100%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="image_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    width: 100%;
                                    padding-right: 0px;
                                    padding-left: 0px;
                                  "
                                >
                                  <div align="center" style="line-height: 10px">
                                    <img
                                      alt="Alternate text"
                                      class="big"
                                      src="https://images.unsplash.com/photo-1504711331083-9c895941bf81?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                      style="
                                        display: block;
                                        height: auto;
                                        border: 0;
                                        width: 680px;
                                        max-width: 100%;
                                      "
                                      title="Alternate text"
                                      width="680"
                                    />
                                  </div>
                                </td>
                              </tr>
                            </table>
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-bottom: 5px;
                                    padding-left: 20px;
                                    padding-right: 10px;
                                  "
                                >
                                  <div style="font-family: sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        mso-line-height-alt: 14.399999999999999px;
                                        color: #3fb9bc;
                                        line-height: 1.2;
                                        font-family: Oswald, Arial,
                                          Helvetica Neue, Helvetica, sans-serif;
                                      "
                                    >
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: center;
                                        "
                                      >
                                        <span style="font-size: 42px"
                                          ><strong
                                            >Thank you for choosing bidders
                                            portal</strong
                                          ></span
                                        >
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-bottom: 30px;
                                    padding-left: 15px;
                                    padding-right: 15px;
                                    padding-top: 15px;
                                  "
                                >
                                  <div style="font-family: Arial, sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        mso-line-height-alt: 18px;
                                        color: #555555;
                                        line-height: 1.5;
                                        font-family: 'Roboto Slab', Arial,
                                          'Helvetica Neue', Helvetica,
                                          sans-serif;
                                      "
                                    >
                                      <p style="margin: 0; font-size: 12px">
                                                                 Your Receipt
                                        Number for Invoice Number BID-005 is
                                        BID-0001-QFU2LWOUQY 
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="image_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    width: 100%;
                                    padding-right: 0px;
                                    padding-left: 0px;
                                  "
                                >
                                  <div align="center" style="line-height: 10px">
                                    <img
                                      alt="Alternate text"
                                      class="big"
                                      src="images/top.png"
                                      style="
                                        display: block;
                                        height: auto;
                                        border: 0;
                                        width: 680px;
                                        max-width: 100%;
                                      "
                                      title="Alternate text"
                                      width="680"
                                    />
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-3"
              role="presentation"
              style="
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
                background-color: #e8f4dc;
              "
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content stack"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        background-position: center top;
                        background-color: #ffffff;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              padding-left: 25px;
                              padding-right: 25px;
                              padding-top: 0px;
                              padding-bottom: 0px;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="100%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-bottom: 10px;
                                    padding-left: 10px;
                                    padding-right: 10px;
                                    padding-top: 20px;
                                  "
                                >
                                  <div style="font-family: sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        mso-line-height-alt: 14.399999999999999px;
                                        color: #3fb9bc;
                                        line-height: 1.2;
                                        font-family: Oswald, Arial,
                                          Helvetica Neue, Helvetica, sans-serif;
                                      "
                                    >
                                      <p style="margin: 0; font-size: 12px">
                                        <span style="font-size: 16px"
                                          >Tender </span
                                        >
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-4"
              role="presentation"
              style="
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
                background-color: #f3f7f2;
              "
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content stack"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        background-color: #ffffff;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="66.66666666666667%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-bottom: 5px;
                                    padding-left: 35px;
                                    padding-right: 20px;
                                    padding-top: 15px;
                                  "
                                >
                                  <div style="font-family: Arial, sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        font-family: 'Roboto Slab', Arial,
                                          'Helvetica Neue', Helvetica,
                                          sans-serif;
                                        mso-line-height-alt: 18px;
                                        color: #3a4848;
                                        line-height: 1.5;
                                      "
                                    >
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 30px;
                                        "
                                      >
                                        <span
                                          style="
                                            font-size: 20px;
                                            color: #44b4b8;
                                          "
                                          >Bitvivact</span
                                        >
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 22.5px;
                                        "
                                      >
                                        <span style="font-size: 15px"
                                          >Senior Marketing Specialist -  Brand
                                          and Marketing</span
                                        >
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 18px;
                                        "
                                      >
                                         
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <td
                            class="column column-2"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="33.333333333333336%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-bottom: 5px;
                                    padding-left: 35px;
                                    padding-right: 20px;
                                    padding-top: 20px;
                                  "
                                >
                                  <div style="font-family: Arial, sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        font-family: 'Oswald', Arial,
                                          'Helvetica Neue', Helvetica,
                                          sans-serif;
                                        mso-line-height-alt: 18px;
                                        color: #3a4848;
                                        line-height: 1.5;
                                      "
                                    >
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 24px;
                                        "
                                      >
                                        <span style="font-size: 16px"
                                          >Full Time</span
                                        >
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 24px;
                                        "
                                      >
                                        <span style="font-size: 16px"
                                          >San Francisco, CA</span
                                        >
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 18px;
                                        "
                                      >
                                         
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-5"
              role="presentation"
              style="
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
                background-color: #f3f7f2;
              "
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content stack"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        background-color: #ffffff;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              padding-top: 5px;
                              padding-bottom: 5px;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="100%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="divider_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                              "
                              width="100%"
                            >
                              <tr>
                                <td style="padding-bottom: 10px">
                                  <div align="center">
                                    <table
                                      border="0"
                                      cellpadding="0"
                                      cellspacing="0"
                                      role="presentation"
                                      style="
                                        mso-table-lspace: 0pt;
                                        mso-table-rspace: 0pt;
                                      "
                                      width="100%"
                                    >
                                      <tr>
                                        <td
                                          class="divider_inner"
                                          style="
                                            font-size: 1px;
                                            line-height: 1px;
                                            border-top: 1px solid #dfdfdf;
                                          "
                                        >
                                          <span> </span>
                                        </td>
                                      </tr>
                                    </table>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-6"
              role="presentation"
              style="
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
                background-color: #f3f7f2;
              "
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content stack"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        background-color: #ffffff;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="66.66666666666667%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-bottom: 5px;
                                    padding-left: 35px;
                                    padding-right: 20px;
                                    padding-top: 15px;
                                  "
                                >
                                  <div style="font-family: Arial, sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        font-family: 'Roboto Slab', Arial,
                                          'Helvetica Neue', Helvetica,
                                          sans-serif;
                                        mso-line-height-alt: 18px;
                                        color: #3a4848;
                                        line-height: 1.5;
                                      "
                                    >
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 30px;
                                        "
                                      >
                                        <span
                                          style="
                                            font-size: 20px;
                                            color: #44b4b8;
                                          "
                                          >Visivila</span
                                        >
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 22.5px;
                                        "
                                      >
                                        <span style="font-size: 15px"
                                          >Graphic Designer -  Design</span
                                        >
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 18px;
                                        "
                                      >
                                         
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <td
                            class="column column-2"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="33.333333333333336%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-bottom: 5px;
                                    padding-left: 35px;
                                    padding-right: 20px;
                                    padding-top: 20px;
                                  "
                                >
                                  <div style="font-family: Arial, sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        font-family: 'Oswald', Arial,
                                          'Helvetica Neue', Helvetica,
                                          sans-serif;
                                        mso-line-height-alt: 18px;
                                        color: #3a4848;
                                        line-height: 1.5;
                                      "
                                    >
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 24px;
                                        "
                                      >
                                        <span style="font-size: 16px"
                                          >Full Time</span
                                        >
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 24px;
                                        "
                                      >
                                        <span style="font-size: 16px"
                                          >San Francisco, CA</span
                                        >
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 18px;
                                        "
                                      >
                                         
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-7"
              role="presentation"
              style="
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
                background-color: #f3f7f2;
              "
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content stack"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        background-color: #ffffff;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              padding-top: 5px;
                              padding-bottom: 5px;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="100%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="divider_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                              "
                              width="100%"
                            >
                              <tr>
                                <td style="padding-bottom: 10px">
                                  <div align="center">
                                    <table
                                      border="0"
                                      cellpadding="0"
                                      cellspacing="0"
                                      role="presentation"
                                      style="
                                        mso-table-lspace: 0pt;
                                        mso-table-rspace: 0pt;
                                      "
                                      width="100%"
                                    >
                                      <tr>
                                        <td
                                          class="divider_inner"
                                          style="
                                            font-size: 1px;
                                            line-height: 1px;
                                            border-top: 1px solid #dfdfdf;
                                          "
                                        >
                                          <span> </span>
                                        </td>
                                      </tr>
                                    </table>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-8"
              role="presentation"
              style="
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
                background-color: #f3f7f2;
              "
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content stack"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        background-color: #ffffff;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="66.66666666666667%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-bottom: 5px;
                                    padding-left: 35px;
                                    padding-right: 20px;
                                    padding-top: 15px;
                                  "
                                >
                                  <div style="font-family: Arial, sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        font-family: 'Roboto Slab', Arial,
                                          'Helvetica Neue', Helvetica,
                                          sans-serif;
                                        mso-line-height-alt: 18px;
                                        color: #3a4848;
                                        line-height: 1.5;
                                      "
                                    >
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 30px;
                                        "
                                      >
                                        <span
                                          style="
                                            font-size: 20px;
                                            color: #44b4b8;
                                          "
                                          >Bander Stock</span
                                        >
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 22.5px;
                                        "
                                      >
                                        <span style="font-size: 15px"
                                          >Sales Manager -  Sales</span
                                        >
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 18px;
                                        "
                                      >
                                         
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <td
                            class="column column-2"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="33.333333333333336%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-bottom: 5px;
                                    padding-left: 35px;
                                    padding-right: 20px;
                                    padding-top: 20px;
                                  "
                                >
                                  <div style="font-family: Arial, sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        font-family: 'Oswald', Arial,
                                          'Helvetica Neue', Helvetica,
                                          sans-serif;
                                        mso-line-height-alt: 18px;
                                        color: #3a4848;
                                        line-height: 1.5;
                                      "
                                    >
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 24px;
                                        "
                                      >
                                        <span style="font-size: 16px"
                                          >Full Time</span
                                        >
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 24px;
                                        "
                                      >
                                        <span style="font-size: 16px"
                                          >San Francisco, CA</span
                                        >
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 18px;
                                        "
                                      >
                                         
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-9"
              role="presentation"
              style="
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
                background-color: #f3f7f2;
              "
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content stack"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        background-color: #ffffff;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              padding-top: 5px;
                              padding-bottom: 5px;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="100%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="divider_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                              "
                              width="100%"
                            >
                              <tr>
                                <td style="padding-bottom: 10px">
                                  <div align="center">
                                    <table
                                      border="0"
                                      cellpadding="0"
                                      cellspacing="0"
                                      role="presentation"
                                      style="
                                        mso-table-lspace: 0pt;
                                        mso-table-rspace: 0pt;
                                      "
                                      width="100%"
                                    >
                                      <tr>
                                        <td
                                          class="divider_inner"
                                          style="
                                            font-size: 1px;
                                            line-height: 1px;
                                            border-top: 1px solid #dfdfdf;
                                          "
                                        >
                                          <span> </span>
                                        </td>
                                      </tr>
                                    </table>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-10"
              role="presentation"
              style="
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
                background-color: #f3f7f2;
              "
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content stack"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        background-color: #ffffff;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="66.66666666666667%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-bottom: 5px;
                                    padding-left: 35px;
                                    padding-right: 20px;
                                    padding-top: 15px;
                                  "
                                >
                                  <div style="font-family: Arial, sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        font-family: 'Roboto Slab', Arial,
                                          'Helvetica Neue', Helvetica,
                                          sans-serif;
                                        mso-line-height-alt: 18px;
                                        color: #3a4848;
                                        line-height: 1.5;
                                      "
                                    >
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 30px;
                                        "
                                      >
                                        <span
                                          style="
                                            font-size: 20px;
                                            color: #44b4b8;
                                          "
                                          >Companious</span
                                        >
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 22.5px;
                                        "
                                      >
                                        <span style="font-size: 15px"
                                          >Senior Designer -  Brand and
                                          Marketing</span
                                        >
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 18px;
                                        "
                                      >
                                         
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <td
                            class="column column-2"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="33.333333333333336%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-bottom: 5px;
                                    padding-left: 35px;
                                    padding-right: 20px;
                                    padding-top: 20px;
                                  "
                                >
                                  <div style="font-family: Arial, sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        font-family: 'Oswald', Arial,
                                          'Helvetica Neue', Helvetica,
                                          sans-serif;
                                        mso-line-height-alt: 18px;
                                        color: #3a4848;
                                        line-height: 1.5;
                                      "
                                    >
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 24px;
                                        "
                                      >
                                        <span style="font-size: 16px"
                                          >Full Time</span
                                        >
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 24px;
                                        "
                                      >
                                        <span style="font-size: 16px"
                                          >San Francisco, CA</span
                                        >
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 18px;
                                        "
                                      >
                                         
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-11"
              role="presentation"
              style="
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
                background-color: #f3f7f2;
              "
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content stack"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        background-color: #ffffff;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              padding-top: 5px;
                              padding-bottom: 5px;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="100%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="divider_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                              "
                              width="100%"
                            >
                              <tr>
                                <td style="padding-bottom: 10px">
                                  <div align="center">
                                    <table
                                      border="0"
                                      cellpadding="0"
                                      cellspacing="0"
                                      role="presentation"
                                      style="
                                        mso-table-lspace: 0pt;
                                        mso-table-rspace: 0pt;
                                      "
                                      width="100%"
                                    >
                                      <tr>
                                        <td
                                          class="divider_inner"
                                          style="
                                            font-size: 1px;
                                            line-height: 1px;
                                            border-top: 1px solid #dfdfdf;
                                          "
                                        >
                                          <span> </span>
                                        </td>
                                      </tr>
                                    </table>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-12"
              role="presentation"
              style="
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
                background-color: #f3f7f2;
              "
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content stack"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        background-color: #ffffff;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="66.66666666666667%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-bottom: 5px;
                                    padding-left: 35px;
                                    padding-right: 20px;
                                    padding-top: 15px;
                                  "
                                >
                                  <div style="font-family: Arial, sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        font-family: 'Roboto Slab', Arial,
                                          'Helvetica Neue', Helvetica,
                                          sans-serif;
                                        mso-line-height-alt: 18px;
                                        color: #3a4848;
                                        line-height: 1.5;
                                      "
                                    >
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 30px;
                                        "
                                      >
                                        <span
                                          style="
                                            font-size: 20px;
                                            color: #44b4b8;
                                          "
                                          >Vera Top Leaders</span
                                        >
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 22.5px;
                                        "
                                      >
                                        <span style="font-size: 15px"
                                          >Junior Developer -  Development</span
                                        >
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 18px;
                                        "
                                      >
                                         
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <td
                            class="column column-2"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="33.333333333333336%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-bottom: 5px;
                                    padding-left: 35px;
                                    padding-right: 20px;
                                    padding-top: 20px;
                                  "
                                >
                                  <div style="font-family: Arial, sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        font-family: 'Oswald', Arial,
                                          'Helvetica Neue', Helvetica,
                                          sans-serif;
                                        mso-line-height-alt: 18px;
                                        color: #3a4848;
                                        line-height: 1.5;
                                      "
                                    >
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 24px;
                                        "
                                      >
                                        <span style="font-size: 16px"
                                          >Full Time</span
                                        >
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 24px;
                                        "
                                      >
                                        <span style="font-size: 16px"
                                          >San Francisco, CA</span
                                        >
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: left;
                                          mso-line-height-alt: 18px;
                                        "
                                      >
                                         
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-13"
              role="presentation"
              style="
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
                background-color: #f3f7f2;
              "
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content stack"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              padding-top: 0px;
                              padding-bottom: 35px;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="100%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="image_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    width: 100%;
                                    padding-right: 0px;
                                    padding-left: 0px;
                                  "
                                >
                                  <div align="center" style="line-height: 10px">
                                    <img
                                      alt="Alternate text"
                                      class="big"
                                      src="images/bottom.png"
                                      style="
                                        display: block;
                                        height: auto;
                                        border: 0;
                                        width: 680px;
                                        max-width: 100%;
                                      "
                                      title="Alternate text"
                                      width="680"
                                    />
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-14"
              role="presentation"
              style="mso-table-lspace: 0pt; mso-table-rspace: 0pt"
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content stack"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              padding-top: 35px;
                              padding-bottom: 15px;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="100%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="button_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-bottom: 20px;
                                    padding-left: 10px;
                                    padding-right: 10px;
                                    padding-top: 10px;
                                    text-align: center;
                                  "
                                >
                                  <div align="center">
                                    <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="biddersportal.com/listing" style="height:64px;width:342px;v-text-anchor:middle;" arcsize="55%" stroke="false" fillcolor="#3fb9bc"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#ffffff; font-family:Arial, sans-serif; font-size:22px"><!
                                    [endif]--><a
                                      href="biddersportal.com/listing"
                                      style="
                                        text-decoration: none;
                                        display: inline-block;
                                        color: #ffffff;
                                        background-color: #3fb9bc;
                                        border-radius: 35px;
                                        width: auto;
                                        border-top: 0px solid #2f7d81;
                                        font-weight: 400;
                                        border-right: 0px solid #2f7d81;
                                        border-bottom: 0px solid #2f7d81;
                                        border-left: 0px solid #2f7d81;
                                        padding-top: 10px;
                                        padding-bottom: 10px;
                                        font-family: Oswald, Arial,
                                          Helvetica Neue, Helvetica, sans-serif;
                                        text-align: center;
                                        mso-border-alt: none;
                                        word-break: keep-all;
                                      "
                                      target="_blank"
                                      ><span
                                        style="
                                          padding-left: 45px;
                                          padding-right: 45px;
                                          font-size: 22px;
                                          display: inline-block;
                                          letter-spacing: normal;
                                        "
                                        ><span
                                          style="
                                            line-height: 32px;
                                            word-break: break-word;
                                          "
                                          ><span
                                            data-mce-style="font-size: 22px; line-height: 44px;"
                                            style="
                                              font-size: 22px;
                                              line-height: 44px;
                                            "
                                            >Browse For More Tenders</span
                                          ></span
                                        ></span
                                      ></a
                                    >
                                    <!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
                                  </div>
                                </td>
                              </tr>
                            </table>
                            <table
                              border="0"
                              cellpadding="10"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td>
                                  <div style="font-family: sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        mso-line-height-alt: 14.399999999999999px;
                                        color: #3fb9bc;
                                        line-height: 1.2;
                                        font-family: Oswald, Arial,
                                          Helvetica Neue, Helvetica, sans-serif;
                                      "
                                    >
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: center;
                                        "
                                      >
                                        <span style="font-size: 34px"
                                          ><strong>Our Service</strong></span
                                        >
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-15"
              role="presentation"
              style="mso-table-lspace: 0pt; mso-table-rspace: 0pt"
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content stack"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="33.333333333333336%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="image_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    width: 100%;
                                    padding-right: 0px;
                                    padding-left: 0px;
                                    padding-top: 5px;
                                  "
                                >
                                  <div align="center" style="line-height: 10px">
                                    <img
                                      alt="Alternate text"
                                      src="images/company.png"
                                      style="
                                        display: block;
                                        height: auto;
                                        border: 0;
                                        width: 64px;
                                        max-width: 100%;
                                      "
                                      title="Alternate text"
                                      width="64"
                                    />
                                  </div>
                                </td>
                              </tr>
                            </table>
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-bottom: 10px;
                                    padding-left: 10px;
                                    padding-right: 10px;
                                    padding-top: 20px;
                                  "
                                >
                                  <div style="font-family: sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        mso-line-height-alt: 14.399999999999999px;
                                        color: #232132;
                                        line-height: 1.2;
                                        font-family: Oswald, Arial,
                                          Helvetica Neue, Helvetica, sans-serif;
                                      "
                                    >
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: center;
                                        "
                                      >
                                        <span style="font-size: 18px"
                                          ><strong>LOREM IPSUM</strong></span
                                        >
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-bottom: 15px;
                                    padding-left: 10px;
                                    padding-right: 10px;
                                  "
                                >
                                  <div style="font-family: Arial, sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        font-family: 'Roboto Slab', Arial,
                                          'Helvetica Neue', Helvetica,
                                          sans-serif;
                                        mso-line-height-alt: 18px;
                                        color: #808080;
                                        line-height: 1.5;
                                      "
                                    >
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: center;
                                          mso-line-height-alt: 21px;
                                        "
                                      >
                                        <span style="font-size: 14px"
                                          >Lorem ipsum dolor sit amet,
                                          consectetur adipiscing elit. Integer
                                          dui magna, convallis</span
                                        >
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <td
                            class="column column-2"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="33.333333333333336%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="image_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    width: 100%;
                                    padding-right: 0px;
                                    padding-left: 0px;
                                    padding-top: 5px;
                                  "
                                >
                                  <div align="center" style="line-height: 10px">
                                    <img
                                      alt="Alternate text"
                                      src="images/work.png"
                                      style="
                                        display: block;
                                        height: auto;
                                        border: 0;
                                        width: 64px;
                                        max-width: 100%;
                                      "
                                      title="Alternate text"
                                      width="64"
                                    />
                                  </div>
                                </td>
                              </tr>
                            </table>
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-bottom: 10px;
                                    padding-left: 10px;
                                    padding-right: 10px;
                                    padding-top: 20px;
                                  "
                                >
                                  <div style="font-family: sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        mso-line-height-alt: 14.399999999999999px;
                                        color: #232132;
                                        line-height: 1.2;
                                        font-family: Oswald, Arial,
                                          Helvetica Neue, Helvetica, sans-serif;
                                      "
                                    >
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: center;
                                        "
                                      >
                                        <span style="font-size: 18px"
                                          ><strong>DOLOR SIT AMET</strong></span
                                        >
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-bottom: 15px;
                                    padding-left: 10px;
                                    padding-right: 10px;
                                  "
                                >
                                  <div style="font-family: Arial, sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        font-family: 'Roboto Slab', Arial,
                                          'Helvetica Neue', Helvetica,
                                          sans-serif;
                                        mso-line-height-alt: 18px;
                                        color: #808080;
                                        line-height: 1.5;
                                      "
                                    >
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: center;
                                          mso-line-height-alt: 21px;
                                        "
                                      >
                                        <span style="font-size: 14px"
                                          >Lorem ipsum dolor sit amet,
                                          consectetur adipiscing elit. Integer
                                          dui magna, convallis</span
                                        >
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <td
                            class="column column-3"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="33.333333333333336%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="image_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    width: 100%;
                                    padding-right: 0px;
                                    padding-left: 0px;
                                    padding-top: 5px;
                                  "
                                >
                                  <div align="center" style="line-height: 10px">
                                    <img
                                      alt="Alternate text"
                                      src="images/solution.png"
                                      style="
                                        display: block;
                                        height: auto;
                                        border: 0;
                                        width: 64px;
                                        max-width: 100%;
                                      "
                                      title="Alternate text"
                                      width="64"
                                    />
                                  </div>
                                </td>
                              </tr>
                            </table>
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-bottom: 10px;
                                    padding-left: 10px;
                                    padding-right: 10px;
                                    padding-top: 20px;
                                  "
                                >
                                  <div style="font-family: sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        mso-line-height-alt: 14.399999999999999px;
                                        color: #232132;
                                        line-height: 1.2;
                                        font-family: Oswald, Arial,
                                          Helvetica Neue, Helvetica, sans-serif;
                                      "
                                    >
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: center;
                                        "
                                      >
                                        <span style="font-size: 18px"
                                          ><strong>INTEGER MAGNA</strong></span
                                        >
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    padding-bottom: 15px;
                                    padding-left: 10px;
                                    padding-right: 10px;
                                  "
                                >
                                  <div style="font-family: Arial, sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        font-family: 'Roboto Slab', Arial,
                                          'Helvetica Neue', Helvetica,
                                          sans-serif;
                                        mso-line-height-alt: 18px;
                                        color: #808080;
                                        line-height: 1.5;
                                      "
                                    >
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: center;
                                          mso-line-height-alt: 21px;
                                        "
                                      >
                                        <span style="font-size: 14px"
                                          >Lorem ipsum dolor sit amet,
                                          consectetur adipiscing elit. Integer
                                          dui magna, convallis</span
                                        >
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-16"
              role="presentation"
              style="mso-table-lspace: 0pt; mso-table-rspace: 0pt"
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content stack"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              padding-top: 5px;
                              padding-bottom: 5px;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="100%"
                          >
                            <div
                              class="spacer_block"
                              style="
                                height: 25px;
                                line-height: 25px;
                                font-size: 1px;
                              "
                            >
                               
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-17"
              role="presentation"
              style="mso-table-lspace: 0pt; mso-table-rspace: 0pt"
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content stack"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              padding-top: 0px;
                              padding-bottom: 0px;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="100%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="empty_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                              "
                              width="100%"
                            >
                              <tr>
                                <td>
                                  <div></div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-18"
              role="presentation"
              style="mso-table-lspace: 0pt; mso-table-rspace: 0pt"
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content stack"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        background-color: #3fb9bc;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              padding-top: 5px;
                              padding-bottom: 0px;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="100%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="empty_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                              "
                              width="100%"
                            >
                              <tr>
                                <td>
                                  <div></div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-19"
              role="presentation"
              style="mso-table-lspace: 0pt; mso-table-rspace: 0pt"
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content stack"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              padding-top: 0px;
                              padding-bottom: 30px;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="100%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="empty_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                              "
                              width="100%"
                            >
                              <tr>
                                <td>
                                  <div></div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-20"
              role="presentation"
              style="mso-table-lspace: 0pt; mso-table-rspace: 0pt"
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content stack"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              padding-top: 0px;
                              padding-bottom: 30px;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="100%"
                          >
                            <table
                              border="0"
                              cellpadding="10"
                              cellspacing="0"
                              class="social_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                              "
                              width="100%"
                            >
                              <tr>
                                <td>
                                  <table
                                    align="center"
                                    border="0"
                                    cellpadding="0"
                                    cellspacing="0"
                                    class="social-table"
                                    role="presentation"
                                    style="
                                      mso-table-lspace: 0pt;
                                      mso-table-rspace: 0pt;
                                    "
                                    width="184px"
                                  >
                                    <tr>
                                      <td style="padding: 0 7px 0 7px">
                                        <a
                                          href="http://www.example.com/"
                                          target="_blank"
                                          ><img
                                            alt="Facebook"
                                            height="32"
                                            src="images/facebook2x.png"
                                            style="
                                              display: block;
                                              height: auto;
                                              border: 0;
                                            "
                                            title="Facebook"
                                            width="32"
                                        /></a>
                                      </td>
                                      <td style="padding: 0 7px 0 7px">
                                        <a
                                          href="http://www.example.com/"
                                          target="_blank"
                                          ><img
                                            alt="Twitter"
                                            height="32"
                                            src="images/twitter2x.png"
                                            style="
                                              display: block;
                                              height: auto;
                                              border: 0;
                                            "
                                            title="Twitter"
                                            width="32"
                                        /></a>
                                      </td>
                                      <td style="padding: 0 7px 0 7px">
                                        <a
                                          href="http://www.example.com/"
                                          target="_blank"
                                          ><img
                                            alt="LinkedIn"
                                            height="32"
                                            src="images/linkedin2x.png"
                                            style="
                                              display: block;
                                              height: auto;
                                              border: 0;
                                            "
                                            title="LinkedIn"
                                            width="32"
                                        /></a>
                                      </td>
                                      <td style="padding: 0 7px 0 7px">
                                        <a
                                          href="http://www.example.com/"
                                          target="_blank"
                                          ><img
                                            alt="YouTube"
                                            height="32"
                                            src="images/youtube2x.png"
                                            style="
                                              display: block;
                                              height: auto;
                                              border: 0;
                                            "
                                            title="YouTube"
                                            width="32"
                                        /></a>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                            <table
                              border="0"
                              cellpadding="10"
                              cellspacing="0"
                              class="divider_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                              "
                              width="100%"
                            >
                              <tr>
                                <td>
                                  <div align="center">
                                    <table
                                      border="0"
                                      cellpadding="0"
                                      cellspacing="0"
                                      role="presentation"
                                      style="
                                        mso-table-lspace: 0pt;
                                        mso-table-rspace: 0pt;
                                      "
                                      width="100%"
                                    >
                                      <tr>
                                        <td
                                          class="divider_inner"
                                          style="
                                            font-size: 1px;
                                            line-height: 1px;
                                            border-top: 1px solid #e0e0e0;
                                          "
                                        >
                                          <span> </span>
                                        </td>
                                      </tr>
                                    </table>
                                  </div>
                                </td>
                              </tr>
                            </table>
                            <table
                              border="0"
                              cellpadding="10"
                              cellspacing="0"
                              class="text_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                                word-break: break-word;
                              "
                              width="100%"
                            >
                              <tr>
                                <td>
                                  <div style="font-family: Arial, sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        font-family: 'Roboto Slab', Arial,
                                          'Helvetica Neue', Helvetica,
                                          sans-serif;
                                        mso-line-height-alt: 18px;
                                        color: #a6a4a2;
                                        line-height: 1.5;
                                      "
                                    >
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: center;
                                          mso-line-height-alt: 18px;
                                        "
                                      >
                                        <span style="font-size: 12px"
                                          >This message was sent from Bidders
                                          Portal Support<a
                                            href="mailto:email@example.com"
                                            style="
                                              text-decoration: none;
                                              color: #a6a4a2;
                                            "
                                            title="email@example.com"
                                          ></a
                                        ></span>
                                      </p>
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: center;
                                          mso-line-height-alt: 18px;
                                        "
                                      >
                                        <span style="font-size: 12px"
                                          >If you no longer wish to receive
                                          e-mails from us,
                                          <u
                                            ><a
                                              href="http://www.example.com/"
                                              rel="noopener"
                                              style="
                                                text-decoration: none;
                                                color: #a6a4a2;
                                              "
                                              target="_blank"
                                              >unsubscribe</a
                                            ></u
                                          ></span
                                        >
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              align="center"
              border="0"
              cellpadding="0"
              cellspacing="0"
              class="row row-21"
              role="presentation"
              style="mso-table-lspace: 0pt; mso-table-rspace: 0pt"
              width="100%"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      class="row-content stack"
                      role="presentation"
                      style="
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        color: #000000;
                        width: 680px;
                      "
                      width="680"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              padding-top: 5px;
                              padding-bottom: 5px;
                              border-top: 0px;
                              border-right: 0px;
                              border-bottom: 0px;
                              border-left: 0px;
                            "
                            width="100%"
                          >
                            <table
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              class="icons_block"
                              role="presentation"
                              style="
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt;
                              "
                              width="100%"
                            >
                              <tr>
                                <td
                                  style="
                                    vertical-align: middle;
                                    color: #9d9d9d;
                                    font-family: inherit;
                                    font-size: 15px;
                                    padding-bottom: 5px;
                                    padding-top: 5px;
                                    text-align: center;
                                  "
                                >
                                  <table
                                    cellpadding="0"
                                    cellspacing="0"
                                    role="presentation"
                                    style="
                                      mso-table-lspace: 0pt;
                                      mso-table-rspace: 0pt;
                                    "
                                    width="100%"
                                  >
                                    <tr>
                                      <td
                                        style="
                                          vertical-align: middle;
                                          text-align: center;
                                        "
                                      >
                                        <!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
                                        <!--[if !vml]><!-->
                                        <table
                                          cellpadding="0"
                                          cellspacing="0"
                                          class="icons-inner"
                                          role="presentation"
                                          style="
                                            mso-table-lspace: 0pt;
                                            mso-table-rspace: 0pt;
                                            display: inline-block;
                                            margin-right: -4px;
                                            padding-left: 0px;
                                            padding-right: 0px;
                                          "
                                        >
                                          <!--<![endif]-->
                                          <tr>
                                            <td
                                              style="
                                                vertical-align: middle;
                                                text-align: center;
                                                padding-top: 5px;
                                                padding-bottom: 5px;
                                                padding-left: 5px;
                                                padding-right: 6px;
                                              "
                                            >
                                              <a
                                                href="https://www.designedwithbee.com/"
                                                style="text-decoration: none"
                                                target="_blank"
                                                ><img
                                                  align="center"
                                                  alt="Designed with BEE"
                                                  class="icon"
                                                  height="32"
                                                  src="images/bee.png"
                                                  style="
                                                    display: block;
                                                    height: auto;
                                                    margin: 0 auto;
                                                    border: 0;
                                                  "
                                                  width="34"
                                              /></a>
                                            </td>
                                            <td
                                              style="
                                                font-family: Oswald, Arial,
                                                  Helvetica Neue, Helvetica,
                                                  sans-serif;
                                                font-size: 15px;
                                                color: #9d9d9d;
                                                vertical-align: middle;
                                                letter-spacing: undefined;
                                                text-align: center;
                                              "
                                            >
                                              <a
                                                href="https://www.designedwithbee.com/"
                                                style="
                                                  color: #9d9d9d;
                                                  text-decoration: none;
                                                "
                                                target="_blank"
                                                >Designed with BEE</a
                                              >
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
    <!-- End -->
  </body>
</html>
