<?php
$message = '';
if(isset($_POST['first_name'])) {

    function gen_uuid() {
        return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

            // 16 bits for "time_mid"
            mt_rand( 0, 0xffff ),

            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand( 0, 0x0fff ) | 0x4000,

            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand( 0, 0x3fff ) | 0x8000,

            // 48 bits for "node"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
        );
    }

    $telephone = (string)($_POST['before_telephone']).(string)($_POST['telephone']);

    $arr = array(
        'properties' => array(
            array(
                'property' => 'lastname',
                'value' => $_POST['last_name']
            ),
            array(
                'property' => 'firstname',
                'value' => $_POST['first_name']
            ),
            array(
                'property' => 'new_email',
                'value' => $_POST['email']
            ),
            array(
                'property' => 'phone',
                'value' => $telephone
            ),
            array(
                'property' => 'countries',
                'value' => $_POST['countries']
            ),
            array(
                'property' => 'destinations',
                'value' => $destinations = implode(', ', $_POST['destinations'])
            ),
            array(
                'property' => 'duration',
                'value' => $_POST['duration']
            ),
            array(
                'property' => 'date',
                'value' => $_POST['date']
            ),
            array(
                'property' => 'flexible',
                'value' => $_POST['flexible']
            ),
            array(
                'property' => 'adult',
                'value' => $_POST['adult']
            ),
            array(
                'property' => 'children_above',
                'value' => $_POST["children_above"]
            ),
            array(
                'property' => 'children_below',
                'value' => $_POST['children_below']
            ),
            array(
                'property' => 'travel_style',
                'value' => implode(', ', $_POST['travel_style'])
            ),
            array(
                'property' => 'start',
                'value' => $_POST['start']
            ),
            array(
                'property' => 'budget',
                'value' => $_POST['budget']
            ),
            array(
                'property' => 'holiday',
                'value' => $_POST["holiday"]
            )
        )
    );
    $post_json = json_encode($arr);
    $endpoint = "https://api.hubapi.com/contacts/v1/contact/?hapikey=1a99099d-2a33-41a4-8395-2021edde3f9a";
    $ch = @curl_init();
    @curl_setopt($ch, CURLOPT_POST, true);
    @curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
    @curl_setopt($ch, CURLOPT_URL, $endpoint);
    @curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = @curl_exec($ch);
    $status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curl_errors = curl_error($ch);
    @curl_close($ch);
    if ($status_code == 200) {

        require("class.phpmailer.php");
        require("class.smtp.php");
        $mail = new PHPMailer();
        $mail->IsSMTP(); // send via SMTP
		$mail->CharSet  = "utf-8";
        $mail->Host = "smtp.gmail.com"; // SMTP servers
        $mail->SMTPAuth = true; // turn on SMTP authentication
        $mail->Username = "sales@luxurytravels.asia"; // SMTP username
        $mail->Password = "NamTrieu#S0n@2107"; // SMTP password
        $mail->From = "sales@luxurytravelvietnam.com";
        $mail->FromName = "Luxury Travel ";
        $mail->AddAddress($_POST['email'],"Thanh vien"); //$email là địa chỉ email mà bạn muốn gởi
		$mail->addCC('marketing4@luxurytravelvietnam.com');
		$mail->addCC('marketing5@luxurytravelvietnam.com');
//        $mail->AddReplyTo("sales@luxurytravelvietnam.com");
        $mail->WordWrap = 50; // set word wrap
        $mail->IsHTML(true); // send as HTML

        ob_start();
        ?>

        <div marginwidth="0" marginheight="0" style="margin:0;padding:0;font-family:Arial,sans-serif;line-height:1.3em">
            <table class="m_2396596154140361991m_8382415399398585989wrapper" style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323;font-size:14px;background-color:#dcd8d4;width:100%;margin:0;padding:50px 0 50px 0" height="100%" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
                    <td style="font-family:Arial,sans-serif;line-height:1.3em" valign="top" align="center">
                        <table class="m_2396596154140361991m_8382415399398585989main-body" style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323;border-radius:5px!important;overflow:hidden;background-color:#ffffff;border:1px solid #c6c2bf;width:700px" cellspacing="0" cellpadding="0" border="0">
                            <tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
                                <td style="font-family:Arial,sans-serif;line-height:1.3em" valign="top" align="center">
                                    <table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
                                            <td class="m_2396596154140361991m_8382415399398585989template_header" style="font-family:Arial;line-height:1.3em;background-color:#ffffff;color:#737373;border-top-left-radius:2px!important;border-top-right-radius:2px!important;border-bottom:1px solid #f2f2f2;font-weight:bold;vertical-align:middle;text-align:center;padding:16.666666666667px 23.076923076923px">
                                                <a href="http://www.dyoss.com" border="0" style="color:#737373!important;text-decoration:none;font-weight:normal;font-size:13px;margin:0 0 0 12px" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://www.dyoss.com&amp;source=gmail&amp;ust=1491757381984000&amp;usg=AFQjCNFo3bl8Qd6InRYtF309dcQJx6k6EQ">
                                                    <img src="http://www.luxurytravelvietnam.com/images/logo.jpg" style="border:none;display:inline;font-size:14px;font-weight:bold;height:auto;line-height:100%;outline:none;text-decoration:none;text-transform:capitalize" class="m_2396596154140361991CToWUd CToWUd"></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr style="font-family:Arial,sans-serif;line-height:1.3em">
                                <td style="font-family:Arial,sans-serif;line-height:1.3em" valign="top" align="left">
                                    <table id="m_2396596154140361991m_8382415399398585989template_body" style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
                                            <td class="m_2396596154140361991m_8382415399398585989body_content" style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323;background-color:#ffffff" valign="top">
                                                <table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
                                                        <td class="m_2396596154140361991m_8382415399398585989body_content_inner" style="font-family:Arial;line-height:1.3em;text-align:left;padding-left:55px;padding-right:55px;padding-top:30px;padding-bottom:30px;" valign="top">
                                                            <table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
                                                                    <td class="m_2396596154140361991m_8382415399398585989top_content_container" style="font-family:Arial,sans-serif;line-height:1.3em;padding:22px 0 22px 0" valign="top">
                                                                        <p>
                                                                            <strong>
                                                                                Sehr geehrte Damen und Herren,
                                                                            </strong>,
                                                                        </p>
                                                                        <p>
                                                                            Herzliche Grüße aus Luxury Travel Vietnam (www.luxurytravelvietnam.com)!
                                                                        </p>
                                                                        <p>
                                                                            Vielen Dank für Ihr Interesse an  Luxury Travel und unsere Reisedienstleistungen in Südostasien.
                                                                        </p>
                                                                        <p>
                                                                            Wir bestätigen, dass Ihre Reiseanfrage mit untenstehenden Informationen erhalten wurde:
                                                                        </p>
                                                                        <p>
                                                                        <table>
                                                                            <tr>
                                                                                <td><img src="<?php echo $_POST['tour_src']; ?>" style="width: 250px;"></td>
                                                                                <td><a href="<?php echo $_POST['tour_href']; ?>"><?php echo $_POST['tour_text']; ?></a></td>
                                                                            </tr>
                                                                        </table>
                                                                        </p>
                                                                        <p>
                                                                        1. Vorname: <?php echo $_POST['first_name']; ?>
                                                                        </p>
                                                                        <p>
                                                                        2. Nachname: <?php echo $_POST['last_name']; ?>
                                                                        </p>
                                                                        <p>
                                                                        3. Email: <?php echo $_POST['email']; ?>
                                                                        </p>
                                                                        <p>
                                                                        4. Telefon: <?php echo $telephone; ?>
                                                                        </p>
                                                                        <p>
                                                                        5. Herkunftsland: <?php echo $_POST['countries']; ?>
                                                                        </p>
                                                                        <p>
                                                                        6. Gewünschte Reiseziele: <?php echo implode(', ', $_POST['destinations']); ?>
                                                                        </p>
                                                                        <p>
                                                                        7. Ankunftsdatum: <?php echo $_POST['date']; ?>
                                                                        </p>
                                                                        <p>
                                                                        8. Ihr flexibeler Ankunftsdatum oder nicht flexibeler Ankunftsdatum: <?php echo $_POST['flexible']; ?>
                                                                        </p>
                                                                        <p>
                                                                         9. Reisedauer: <?php echo $_POST['duration']; ?>
                                                                        </p>
                                                                        <p>
                                                                        10. Teilnehmer: <?php echo $_POST['adult']?$_POST['adult']:0; ?> Erwachsene <?php echo $_POST['children_above']?$_POST['children_above']:0; ?> Kinden über 12 Jahre alt <?php echo $_POST['children_below']?$_POST['children_below']:0; ?> Kinden unten 12 Jahre alt
                                                                        </p>
                                                                        <p>
                                                                        11. Sie interessieren sich für: <?php echo implode(', ', $_POST['travel_style']); ?> und Ihre Hotelkategorie ist: <?php echo $_POST['start']; ?>
                                                                        </p>
                                                                        <p>
                                                                        12. Budget: <?php echo $_POST['budget']; ?>
                                                                        </p>
                                                                        <p>
                                                                        13. Ihr Lieblingsurlaub sieht nach aus: <?php echo $_POST['holiday']; ?>
                                                                        </p>
                                                                        <p>
                                                                            Unser Team wird Sie schnell wie möglich innerhalb von 24 Stunde kontaktieren.
                                                                        </p>
                                                                        <p>
                                                                            Beantworten Sie diese Email nicht. Falls Sie Fragen haben oder die sofortige Hilfe brauchen, zögern Sie nicht uns zu kontaktieren via Email sales@luxurytravelvietnam.com oder via Telefon +84 4 3927 4120 or +84 1234 68 69 96.
                                                                        </p>
                                                                        <p>
                                                                            Mit besten Grüßen,
                                                                        </p>
                                                                        <p>
                                                                            Luxury Travel Team
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" cellpadding="0" width="100%" border="0"><tbody><tr style="font-family:Arial,sans-serif;line-height:1.3em">
                                                                    <td class="m_2396596154140361991m_8382415399398585989top_content_container" style="font-family:Arial,sans-serif;line-height:1.3em;padding:22px 0 22px 0">
                                                                        <table style="font-family:Arial,sans-serif;line-height:1.3em;color:#232323" cellspacing="0" cellpadding="0" width="100%" border="0">
                                                                            <tbody>
                                                                                <tr style="font-family:Arial,sans-serif;line-height:1.3em">
                                                                                    <td class="m_2396596154140361991m_8382415399398585989order_items_table_column_pading_first" style="font-family:Arial,sans-serif;line-height:1.3em;padding-left:0px;padding-right:27.5px" valign="top" width="50%">
                                                                                       <img src="<?php echo $_SERVER['SERVER_NAME']; ?>/img/footer_detail.png" style="width: 100%;">
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
        </div>



        <?php
        $message = ob_get_clean();
        $subject = 'Ihre Anfrage – der maßgeschneiderte Urlaub mit Luxury Travel wurde erhalten.';
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->AltBody = "";
        if(!$mail->Send())
        {
            header('Location: thank.php');
//            echo "Message was not sent";
//            echo "Mailer Error: " . $mail->ErrorInfo;
        }else{
            header('Location: thank.php');
        }
        die();
    }else{
        $message = 'Lỗi hệ thống';
    }
}
?>