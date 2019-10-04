<?php
session_start();
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
function uploadFile($file){
    $errors = [];
    $target_dir = "uploads/";
    $name = $file['name'];
    $newName = $target_dir.md5(microtime().md5(time())).$name;

    move_uploaded_file($file["tmp_name"], $newName);
    return $newName;
}

//process post request data
if (isset($_POST['submit'])) {
    $firstname = $_POST['first'];
    $middlename = $_POST['middle'];
    $lastname = $_POST['last'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postal = $_POST['postal'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $accountType = implode(',',$_POST['account-type']);
    $accountSwap = $_POST['account-swap'];
    $position = $_POST['your-position'];
    $aboutCompany = $_POST['about-company'];
    $relevantInfo = $_POST['relevant-info'];
    $fullName = $_POST['full-name'];

    /**files*/
    $idFront = uploadFile($_FILES["identification-document-front"]);
    $idFrontExt = strtolower(pathinfo($idFront,PATHINFO_EXTENSION));
    $idBack =  uploadFile($_FILES['identification-document-back']);
    $idBackExt = strtolower(pathinfo($idBack,PATHINFO_EXTENSION));
    $addressDocument = uploadFile($_FILES['address-document']);
    $addressDocumentExt = strtolower(pathinfo($addressDocument,PATHINFO_EXTENSION));
    $corporateDocument = uploadFile($_FILES['corporate-document']);
    $corporateDocumentExt = strtolower(pathinfo($corporateDocument,PATHINFO_EXTENSION));
    /**files*/





// Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
//    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   // Enable SMTP authentication
        $mail->Username = 'codebuilderspk@gmail.com';                     // SMTP username
        $mail->Password = 'hpbvwdugwjcyuoix';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('codebuilderspk@gmail.com', 'Pre registration');
        $mail->addAddress('prereg@crypto-swap.com', 'CRYPTO SWAP - KYC ');

        $mail->addAttachment("$idFront", 'PHOTO ID FRONT.'.$idFrontExt);    // Optional name
        $mail->addAttachment("$idBack", 'PHOTO ID BACK.'.$idBackExt);    // Optional name
        $mail->addAttachment("$addressDocument", 'ADDRESS VERIFICATION.'.$addressDocumentExt);    // Optional name
        $mail->addAttachment("$corporateDocument", 'CORPORATE DOCUMENTATION.'.$corporateDocumentExt);    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "Pre-registration Submissions";
        $mail->Body = "
          
<!doctype html>
<html>
  <head>
    <meta name=\"viewport\" content=\"width=device-width\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <title>CRYPTO SWAP - KYC | Pre-registration Submissions</title>
    <style>
    /* -------------------------------------
        INLINED WITH htmlemail.io/inline
    ------------------------------------- */
    /* -------------------------------------
        RESPONSIVE AND MOBILE FRIENDLY STYLES
    ------------------------------------- */
    @media only screen and (max-width: 620px) {
      table[class=body] h1 {
        font-size: 28px !important;
        margin-bottom: 10px !important;
      }
      table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
        font-size: 16px !important;
      }
      table[class=body] .wrapper,
            table[class=body] .article {
        padding: 10px !important;
      }
      table[class=body] .content {
        padding: 0 !important;
      }
      table[class=body] .container {
        padding: 0 !important;
        width: 100% !important;
      }
      table[class=body] .main {
        border-left-width: 0 !important;
        border-radius: 0 !important;
        border-right-width: 0 !important;
      }
      table[class=body] .btn table {
        width: 100% !important;
      }
      table[class=body] .btn a {
        width: 100% !important;
      }
      table[class=body] .img-responsive {
        height: auto !important;
        max-width: 100% !important;
        width: auto !important;
      }
    }
    /* -------------------------------------
        PRESERVE THESE STYLES IN THE HEAD
    ------------------------------------- */
    @media all {
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
      .apple-link a {
        color: inherit !important;
        font-family: inherit !important;
        font-size: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
        text-decoration: none !important;
      }
      #MessageViewBody a {
        color: inherit;
        text-decoration: none;
        font-size: inherit;
        font-family: inherit;
        font-weight: inherit;
        line-height: inherit;
      }
      .btn-primary table td:hover {
        background-color: #34495e !important;
      }
      .btn-primary a:hover {
        background-color: #34495e !important;
        border-color: #34495e !important;
      }
    }
    </style>
  </head>
  <body class=\"\" style=\"background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;\">
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"body\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;\">
      <tr>
        <td style=\"font-family: sans-serif; font-size: 14px; vertical-align: top;\">&nbsp;</td>
        <td class=\"container\" style=\"font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;\">
          <div class=\"content\" style=\"box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;\">

            <!-- START CENTERED WHITE CONTAINER -->
            <span class=\"preheader\" style=\"color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;\">This is preheader text. Some clients will show this text as a preview.</span>
            <table class=\"main\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;\">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class=\"wrapper\" style=\"font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;\">
                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;\">
                    <tr>
                      <td style=\"font-family: sans-serif; font-size: 14px; vertical-align: top;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"btn btn-primary\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;\">
                          <tbody>
                            <tr>
                              <td align=\"left\" style=\"font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;\">
                                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;\">
                                  <tbody>
                                    <tr>
                                      <td>First Name</td><td>$firstname</td>
                                    </tr>
                                    <tr>
                                        <td>Middle Name</td><td>$middlename</td>
                                    </tr>
                                    <tr>
                                        <td>Last Name</td><td>$lastname</td>
                                    </tr>
                                    <tr>
                                        <td>ADDRESS LINE 1</td><td>$address1</td>
                                    </tr>
                                    <tr>
                                        <td>ADDRESS LINE 2</td><td>$address2</td>
                                    </tr>
                                    <tr>
                                        <td>CITY</td><td>$city</td>
                                    </tr>
                                    <tr>
                                        <td>STATE / PROVINCE / REGION</td><td>$state</td>
                                    </tr>
                                    <tr>
                                        <td>POSTAL CODE</td><td>$postal</td>
                                    </tr>
                                    <tr>
                                        <td>COUNTRY</td><td>$country</td>
                                    </tr>
                                    <tr>
                                        <td>PHONE</td><td>$phone</td>
                                    </tr>
                                    <tr>
                                        <td>EMAIL</td><td>$email</td>
                                    </tr>
                                    <tr>
                                        <td>PREFERRED USERNAME</td><td>$username</td>
                                    </tr>
                                    <tr>
                                        <td>PASSWORD</td><td>$password</td>
                                    </tr>
                                    <tr>
                                        <td>TYPE OF ACCOUNT REQUIRED </td><td>$accountType</td>
                                    </tr>
                                    <tr>
                                        <td>CRYPTO SWAP ACCOUNT TIER SELECTION</td><td>$accountSwap </td>
                                    </tr>
                                    <tr>
                                        <td>YOU Role </td><td>$position</td>
                                    </tr>
                                    <tr>
                                        <td>Your Company</td><td>$aboutCompany</td>
                                    </tr>
                                    <tr>
                                        <td>RELEVANT INFORMATION </td><td>$relevantInfo</td>
                                    </tr>
                                    <tr>
                                        <td> FULL NAME </td><td>$fullName</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>
          <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td style=\"font-family: sans-serif; font-size: 14px; vertical-align: top;\">&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
    
    ";

        $mail->send();
        unlink($idFront);
        unlink($idBack);
        unlink($addressDocument);
        unlink($corporateDocument);
        header("location:index.php");
        $_SESSION['sent'] = true;
    } catch (Exception $e) {
        header("location:index.php");
        $_SESSION['error'] = true;
    }
}else{
    header("location:index.php");
    $_SESSION['error'] = true;
}