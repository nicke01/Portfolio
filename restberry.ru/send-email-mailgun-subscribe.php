<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'Mailgun/vendor/autoload.php';
use Mailgun\Mailgun;

require_once 'mailgun-settings.php';

$email = $_POST['subscribe-email'];

$mgClient = new Mailgun($mailgunKey);
$mgValidate = new Mailgun($mailgunPub);

$validate = $mgValidate->get('address/validate', [
    'address'    => $email    
])->http_response_body;

if($validate->is_valid)
{
    $hash = $mailgunOptIn->generateHash($listAddress, $secret, $email);

    $mgClient->sendMessage($domain, array(
        'from'    => $corpEmail,
        'to'      => $email,
        'subject' => 'Подтвердите подписку',
        'html'    => "
        <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
		<title> Boost </title>
		<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

		<style type='text/css'>
			/* GENERAL STYLE RESETS */
			.ExternalClass {
				width: 100%;
				background-color: #d9d9d9;
			}

			body {
				font-size: 13px;
				line-height: 1;
				background-color: #d9d9d9;
				margin: 0;
				padding: 0;
				-webkit-font-smoothing: antialiased;
				-webkit-text-size-adjust: 100%;
				-ms-text-size-adjust: 100%;
			}
			
			#bodyTable {
				height: 100% !important;
				margin: 0;
				padding: 0;
				width: 100% !important;
			}
			
			table {
				border-collapse: collapse;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				border-spacing: 0;
				-webkit-text-size-adjust: 100%;
				-ms-text-size-adjust: 100%;
			}
			td, td a {
				
				text-decoration: none;
			}
			td {
				font-size: 14px;
				line-height: 1;
				padding: 0 !important;
			}
			img {
				border: none;
				outline: none;
				text-decoration: none;
				display: inline-block;
				height: auto
			}
			p {
				margin: 0;
				padding: 0;
			}

			a:hover, td a:hover {
				outline: none;
			}

			@media only screen and (min-width: 600px) {
				body[yahoo] .left {
					text-align: left !important;
				}
				body[yahoo] .right {
					text-align: right !important;
				}
			}

			@media only screen and (max-width: 599px) {
				body[yahoo] .wrapper {
					width: 100% !important;
				}
				body[yahoo] .img-resize {
					width: 100% !important;
					height:auto !important;
				}
				body[yahoo] .text-center {
					text-align: center !important;
				}
				body[yahoo] .hide {
					display: none !important;
				}
				body[yahoo] .spacer1 {
					height: 20px !important;
				}
				body[yahoo] .width1 {
					width: 5px !important;
				}
				body[yahoo] .align-center {
					float: none !important;
					margin: 0 auto !important;
				}
				body[yahoo] .max-width{
					max-width: 300px !important;
				}
				body[yahoo] .wrap-width{
					width: 600px !important;
				}
			}

			@media only screen and (max-width: 479px) {
				body[yahoo] .font-resize1 {
					font-size: 18px !important;
				}
				body[yahoo] .font-resize2 {
					font-size: 14px !important;
				}
				body[yahoo] .dec-let-space {
					letter-spacing: 2.5px;
				}

			}

		</style>

	</head>
	<body style='font-size: 14px; background-color: #eceff4;margin: 0; width:100% !important; ' yahoo='fix'>
		<table class='wrapper' width='600' border='0' cellspacing='0' cellpadding='0' align='center' >
			<tr>
				<td>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>

					<!-- row1 start-->
					<tr>
						<td>
						<table cellpadding='0' cellspacing='0' align='center' width='100%'>
							<tr>
								<td background='images/banner.png' style='background-image: url(images/banner.png); background-position: center top; background-repeat: no-repeat; background-size: cover; background-color: #14110f;' valign='top'>	
								<div>
									<table cellpadding='0' cellspacing='0' border='0' width='100%' >
										<tr>
											<td width='20'></td>
											<td>
											<table border='0' cellspacing='0' cellpadding='0' width='100%'>
												<tr>
													<td height='16'></td>
												</tr>

												<tr>
													<td>
													<table width='100%' cellpadding='0' cellspacing='0' border='0' align='center'>
														<tr>
															<td style='font-size: 0; text-align:center; '>
															<table style='width:100%; max-width: 328px; display: inline-block' border='0' cellspacing='0' cellpadding='0'>
																<tr>
																	<td width='328'>
																	<table border='0' cellspacing='0' cellpadding='0' align='center' class='align-center'>
																		<tr>
												                            <td align='center' valign='top'>
												                              <!--===================================================-->
												                              <!--|                  LOGO - START                  |-->
												                              <!--===================================================-->
												                              <a href='https://restberry.ru' style='border: none; color: inherit; display: block; font-family: Arial, sans-serif; font-size: inherit; outline: none; text-decoration: none; width: 165px;'>
												                                <img src='https://restberry.ru/images/logo.png' alt='logo' style='-ms-interpolation-mode: bicubic; border: 0; display: block; outline: 0; text-decoration: none; width: 165px;' width='165' border='0' mc:edit='s1 img 1' editable='true' />
												                              </a>
												                              <!--===================================================-->
												                              <!--|                   LOGO - END                   |-->
												                              <!--===================================================-->
												                            </td>
												                          </tr>
																	</table></td>
																</tr>
															</table>
														</td>

													</tr>
													</table></td>
												</tr>
												<tr>
													<td height='25'></td>
												</tr>
												<tr>
													<td align='center'>
													<table border='0' cellspacing='0' cellpadding='0' align='center' width='100%'>
														<tr>
								                            <td style='cursor: default; color: #ffffff; font-family: Arial, sans-serif; font-size: 18px; font-weight: 700; letter-spacing: 0.1em; line-height: 39px; mso-line-height-rule: exactly;' align='center' valign='top' mc:edit='s1 header2_0'>
								                              <multiline>
								                                <!--===================================================-->
								                                <!--|                SECTION 1 TEXT 1                |-->
								                                <!--===================================================-->
								                                <font face='Arial, sans-serif'>MARCH 23-26, 2016</font>
								                              </multiline>
								                            </td>
								                         </tr>
													</table></td>
												</tr>
												<tr>
													<td height='20'></td>
												</tr>
												<tr>
				                                  <td class='xs-header' style='cursor: default; color: #ffffff; font-family: Arial, sans-serif; font-size: 65px; font-weight: 700; line-height: 65px; padding-bottom: 5px; text-decoration: none; text-overflow: ellipsis; mso-line-height-rule: exactly;' align='center'
				                                  valign='top' mc:edit='s1 heading 1'>
				                                    <multiline>
				                                      <!--===================================================-->
				                                      <!--|                SECTION 1 HEADER                |-->
				                                      <!--===================================================-->
				                                      <font face='Arial, sans-serif'>Подтвердите подписку</font>
				                                    </multiline>
				                                  </td>
				                                </tr>
												<tr>
													<td height='40'></td>
												</tr>

												<tr>
													<td align='center' style='text-align:center;'>
													<table border='0' cellspacing='0' cellpadding='0' width='100%' align='center'>
														<tr>
															<td align='center'>
															<table border='0' cellspacing='0' cellpadding='0' width='100%' align='center'>
																<tr>
								                                  <td style='cursor: default; color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 23px; mso-line-height-rule: exactly;' align='center' valign='top' mc:edit='s1 text2_1'>
								                                    <multiline>
								                                      <!--===================================================-->
								                                      <!--|                SECTION 1 TEXT 2                |-->
								                                      <!--===================================================-->
								                                      <font face='Arial, sans-serif'>Присоединяйтесь сейчас и будьте в курсе новостей</font>
								                                    </multiline>
								                                  </td>
								                                </tr>
															</table></td>
														</tr>
													</table></td>
												</tr>
												<tr>
													<td height='65'></td>
												</tr>
											</table></td>
											<td width='20'></td>
										</tr>
									</table>
								</div></td>
							</tr>
						</table></td>
					</tr>
					<!-- row1 end-->
				</table></td>
			</tr>
		</table>

		<table class='wrapper' width='600' border='0' cellspacing='0' cellpadding='0' align='center' >
			<tr>
				<td>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>

					<!-- row1 start-->
					<tr>
						<td>
						<table cellpadding='0' cellspacing='0' align='center' width='100%'>
							<tr>
								<td style='background: #ffffff;' valign='top'>	
								<div>
									<table cellpadding='0' cellspacing='0' border='0' width='100%' >
										<tr>
											<td width='20'></td>
											<td>
											<table border='0' cellspacing='0' cellpadding='0' width='100%'>
												<tr>
													<td height='16'></td>
												</tr>

												<tr>
													<td>
													<table width='100%' cellpadding='0' cellspacing='0' border='0' align='center'>
														<tr>
															<td style='font-size: 0; text-align:center; '>
															<table style='width:100%; max-width: 328px; display: inline-block' border='0' cellspacing='0' cellpadding='0'>
																 <tr>
								                                  <td style='height: 15px; line-height: 30px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
								                                </tr>
																
																<tr>
																	<td width='328'>
																	<table border='0' cellspacing='0' cellpadding='0' align='center' class='align-center'>
																		 <td style='cursor: default; color: #333333; font-family: Arial, sans-serif; font-size: 35px; font-weight: 700; letter-spacing: 0; text-align: center;' valign='top' align='left' mc:edit='s2 heading 1'>
										                                    <multiline>
										                                      <!--===================================================-->
										                                      <!--|                      TITLE                      |-->
										                                      <!--===================================================-->
										                                      <font face='Arial, sans-serif'>Здравствуйте</font>
										                                    </multiline>
										                                 </td>
																	</table></td>
																</tr>
																<tr>
								                                  <td style='height: 20px; line-height: 15px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
								                                </tr>
								                                <tr>
								                                  <td class='hide' style='height: 5px; line-height: 5px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
								                                </tr>
								                                <tr>
								                                  <td style='border-bottom: 1px solid #cccccc; height: 1px; line-height: 1px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
								                                </tr>
															</table>
														</td>

													</tr>
													</table></td>
												</tr>
												<tr>
													<td height='25'></td>
												</tr>
												<tr>
													<td align='center'>
													<table border='0' cellspacing='0' cellpadding='0' align='center' width='100%'>
														<tr>
							                            <td style='color: #777; font-family: Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 23px; mso-line-height-rule: exactly;' align='center' valign='top' mc:edit='s2 text 1'>
							                              <multiline>
							                                <!--===================================================-->
							                                <!--|                      TEXT                      |-->
							                                <!--===================================================-->
							                                <span style='cursor: default; font-family: Arial, sans-serif;'>Остался всего один шаг: подтвердите подписку, чтобы получать новости о нас на этот Email адрес. Если вы не понимаете, о чем идет речь в данном сообщении - просто проигнорируйте его.</span>
							                              </multiline>
							                            </td>
							                          </tr>
													</table></td>
												</tr>
												<tr>
													<td height='30'></td>
												</tr>

												<tr>
													<td align='center' style='text-align:center;'>
													<table style='margin: 0; mso-table-lspace: 0; mso-table-rspace: 0; padding: 0; width: 100%;' cellspacing='0' cellpadding='0' border='0' width='100%'>
					                                <tr>
					                                  <td align='center' valign='top'>
					                                    <table align='center' style='-moz-border-radius: 30px; -webkit-border-radius: 30px; background-color: transparent; border: 2px solid #B5B5B5; border-collapse: separate !important; border-radius: 30px; color: #B5B5B5; font-family: Arial, sans-serif; font-size: 13px; margin: 0; mso-table-lspace: 0; mso-table-rspace: 0; padding: 0;'
					                                    cellspacing='0' cellpadding='0' border='0' bgcolor='transparent'>
					                                      <tr>
					                                        <td style='-moz-border-radius: 30px; -webkit-border-radius: 30px; border-radius: 30px; color: #B5B5B5; font-family: Arial, sans-serif; font-weight: 700; line-height: 100%; mso-line-height-rule: exactly; padding: 11px 20px; vertical-align: middle;'
					                                        align='center' valign='top' mc:edit='s2 btn 1'>
					                                          <multiline>
					                                            <!--===================================================-->
					                                            <!--|                      LINK                      |-->
					                                            <!--===================================================-->
					                                            <a href='#' target='_blank' style='border: none; color: #B5B5B5; display: block; font-family: Arial, sans-serif; font-size: 16px; font-weight: 700; outline: none; text-decoration: none; padding: 15px;'>Подтвердить подписку</a>
					                                          </multiline>
					                                        </td>
					                                      </tr>
					                                    </table>
					                                  </td>
					                                </tr>
					                              </table></td>
												</tr>
												<tr>
													<td height='50'></td>
												</tr>
											</table></td>
											<td width='20'></td>
										</tr>
									</table>
								</div></td>
							</tr>
						</table></td>
					</tr>
					<!-- row1 end-->
				</table></td>
			</tr>
		</table>

		<table class='wrapper' width='600' border='0' cellspacing='0' cellpadding='0' align='center' >
			<tr>
                <td align='center' valign='top'>
                  	<table class='p100' style='background:#1E1A2C; margin: 0; mso-table-lspace: 0; mso-table-rspace: 0; padding: 0; width: 600px;' width='600' cellspacing='0' cellpadding='0' border='0' align='center'>
                    	<tr>
                      		<td style='height: 50px; line-height: 50px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
                    	</tr>
                    	<tr>
	                      <td align='left' valign='top'>
	                      	<table class='p100' style='margin: 0; mso-table-lspace: 0; mso-table-rspace: 0; padding: 0; width: 30px;' width='30' cellspacing='0' cellpadding='0' border='0' align='left'>
	                      		<tr>
	                      			<td class='hide' style='width: 30px; font-size: 1px;' width='30' valign='top' align='left'>&nbsp;</td>
	                      		</tr>
	                      	</table>
	                        <table class='p100' style='margin: 0; mso-table-lspace: 0; mso-table-rspace: 0; padding: 0; width: 260px;' width='260' cellspacing='0' cellpadding='0' border='0' align='left'>
	                          <tr>
	                            <td align='center' valign='top'>
	                              <table class='p100' style='margin: 0; mso-table-lspace: 0; mso-table-rspace: 0; padding: 0; width: 260px;' width='260' cellspacing='0' cellpadding='0' border='0' align='center'>
	                                <tr>
	                                  <td style='height: 68px; line-height: 68px; mso-line-height-rule: exactly;' valign='top' align='left'>
	                                    <!--===================================================-->
	                                    <!--|                      IMAGE                      |-->
	                                    <!--===================================================-->
	                                    <a href='https://restberry.ru' style='border: none; color: inherit; display: block; font-family: Arial, sans-serif; font-size: inherit; outline: none; text-decoration: none;'>
	                                      <img src='http://restberry.ru/images/logo.png' alt='image' style='-ms-interpolation-mode: bicubic; border: 0; display: block; outline: 0; text-decoration: none; width: 175px;' width='125' border='0' mc:edit='s19 img 1' editable='true'
	                                      />
	                                    </a>
	                                  </td>
	                                </tr>
	                                <tr>
	                                  <td class='hide' style='height: 50px; line-height: 50px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
	                                </tr>
	                                <tr>
	                                  <td style='cursor: default; color: #FFFFFF; font-family: Arial, sans-serif; font-size: 20px; font-weight: 700; line-height: 20px; mso-line-height-rule: exactly;' valign='top' align='left' mc:edit='s19 header2_0'>
	                                    <multiline>
	                                      <!--===================================================-->
	                                      <!--|                     HEADER                     |-->
	                                      <!--===================================================-->
	                                      <font face='Arial, sans-serif'>О нас</font>
	                                    </multiline>
	                                  </td>
	                                </tr>
	                                <tr>
	                                  <td style='height: 20px; line-height: 20px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
	                                </tr>
	                                <tr>
	                                  <td style='cursor: default; color: #FFFFFF; font-family: Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 23px; mso-line-height-rule: exactly;' valign='top' align='left' mc:edit='s19 text 1'>
	                                    <multiline>
	                                      <!--===================================================-->
	                                      <!--|                    CONTENTS                    |-->
	                                      <!--===================================================-->
	                                      <font face='Arial, sans-serif'>Мы объединяем сотни заведений, с целью обеспечить своим пользователям лучшие условия для удобного бронирования столов и заказа еды.</font>
	                                    </multiline>
	                                  </td>
	                                </tr>
	                              </table>
	                            </td>
	                          </tr>
	                          <tr>
	                            <td style='height: 40px; line-height: 40px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
	                          </tr>
	                          <tr>
	                            <td class='hide' style='height: 10px; line-height: 10px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
	                          </tr>
	                        </table>
	                        <!--[if gte mso 9]>
	                        </td>
	                        <td align='left' valign='top' width='315'>
	                        <![endif]-->
	                        <table class='p100' style='margin: 0; mso-table-lspace: 0; mso-table-rspace: 0; padding: 0; width: 30px;' width='30' cellspacing='0' cellpadding='0' border='0' align='left'>
	                      		<tr>
	                      			<td class='hide' style='width: 30px; font-size: 1px;' width='30' valign='top' align='left'>&nbsp;</td>
	                      		</tr>
	                      	</table>

	                        <table class='p100' style='margin: 0; mso-table-lspace: 0; mso-table-rspace: 0; padding: 0; width: 260px;' width='260' cellspacing='0' cellpadding='0' border='0' align='left'>
	                                <tr>
	                                  <td style='cursor: default; color: #FFFFFF; font-family: Arial, sans-serif; font-size: 20px; font-weight: 700; line-height: 20px; mso-line-height-rule: exactly;' valign='top' align='left' mc:edit='s19 header2_1'>
	                                    <multiline>
	                                      <!--===================================================-->
	                                      <!--|                     HEADER                     |-->
	                                      <!--===================================================-->
	                                      <font face='Arial, sans-serif'>Мы в соцсетях</font>
	                                    </multiline>
	                                  </td>
	                                </tr>
	                                <tr>
	                                  <td valign='top' align='left'>
	                                    <table class='p100' style='margin: 0; mso-table-lspace: 0; mso-table-rspace: 0; padding: 0; width: 260px;' width='260' cellspacing='0' cellpadding='0' border='0'>
	                                      <tr>
	                                        <td style='height: 20px; line-height: 20px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
	                                      </tr>
	                                      <tr>
	                                        <td align='left' valign='top'>
	                                          <table style='margin: 0; mso-table-lspace: 0; mso-table-rspace: 0; padding: 0; width: 42px; margin-left: -14px;' width='30' cellspacing='0' cellpadding='0' border='0' align='left'>
	                                            <tr>
	                                              <td colspan='2' style='height: 10px; line-height: 10px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
	                                            </tr>
	                                            <tr>
	                                              <td style='width: 32px;' width='25' valign='middle' align='center'>
	                                                <!--===================================================-->
	                                                <!--|                   SOCIAL LINK                   |-->
	                                                <!--===================================================-->
	                                                <a href='https://www.facebook.com/Restberry-247958756100884/z' style='border: none; color: inherit; display: block; font-family: Arial, sans-serif; font-size: inherit; outline: none; text-decoration: none; width: 25px;'>
	                                                  <img src='http://restberry.ru/images/facebook.png' alt='fb' style='-ms-interpolation-mode: bicubic; margin-top: 2px; border: 0; display: block; outline: 0; text-decoration: none; width: 24px;'  border='0' mc:edit='s19 img 2' editable='true'
	                                                  />
	                                                </a>
	                                              </td>
	                                              
	                                            </tr>
	                                          </table>
	                                          <!--[if gte mso 9]>
	                                          </td>
	                                          <td align='left' valign='top'>
	                                          <![endif]-->
	                                          <table style='margin: 0; mso-table-lspace: 0; mso-table-rspace: 0; padding: 0; width: 42px;' width='42' cellspacing='0' cellpadding='0' border='0' align='left'>
	                                            <tr>
	                                              <td colspan='2' style='height: 10px; line-height: 10px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
	                                            </tr>
	                                            <tr>
	                                              <td style='width: 32px;' width='32' valign='middle' align='center'>
	                                                <!--===================================================-->
	                                                <!--|                   SOCIAL LINK                   |-->
	                                                <!--===================================================-->
	                                                <a href='http://restberry.ru/images/instagram.png' style='border: none; color: inherit; display: block; font-family: Arial, sans-serif; font-size: inherit; outline: none; text-decoration: none; width: 31px;'>
	                                                  <img src='http://restberry.ru/images/instagram.png' alt='fb' style='-ms-interpolation-mode: bicubic; border: 0; display: block; outline: 0; text-decoration: none; width: 31px;' border='0' mc:edit='s19 img 3' editable='true'
	                                                  />
	                                                </a>
	                                              </td>
	                                              <td style='width: 10px; font-size: 1px;' width='10' valign='top' align='left'>&nbsp;</td>
	                                            </tr>
	                                          </table>
	                                          <!--[if gte mso 9]>
	                                          </td>
	                                          <td align='left' valign='top'>
	                                          <![endif]-->
	                                          <table style='margin: 0; mso-table-lspace: 0; mso-table-rspace: 0; padding: 0; width: 42px;' width='42' cellspacing='0' cellpadding='0' border='0' align='left'>
	                                            <tr>
	                                              <td colspan='2' style='height: 10px; line-height: 10px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
	                                            </tr>
	                                            <tr>
	                                              <td style='width: 32px;' width='28' valign='middle' align='center'>
	                                                <!--===================================================-->
	                                                <!--|                   SOCIAL LINK                   |-->
	                                                <!--===================================================-->
	                                                <a href='https://twitter.com/y0dTZB7kXAaJG0L' style='border: none; color: inherit; display: block; font-family: Arial, sans-serif; font-size: inherit; outline: none; text-decoration: none; width: 32px;'>
	                                                  <img src='http://restberry.ru/images/twitter.png' alt='fb' style='-ms-interpolation-mode: bicubic; margin-top: 2px; border: 0; display: block; outline: 0; text-decoration: none; width: 25px;' border='0' mc:edit='s19 img 4' editable='true'
	                                                  />
	                                                </a>
	                                              </td>
	                                              <td style='width: 10px; font-size: 1px;' width='10' valign='top' align='left'>&nbsp;</td>
	                                            </tr>
	                                          </table>
	                                          <!--[if gte mso 9]>
	                                          </td>
	                                          <td align='left' valign='top'>
	                                          <![endif]-->
	                                          <table style='margin: 0; mso-table-lspace: 0; mso-table-rspace: 0; padding: 0; width: 42px;' width='42' cellspacing='0' cellpadding='0' border='0' align='left'>
	                                            <tr>
	                                              <td colspan='2' style='height: 10px; line-height: 6px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
	                                            </tr>
	                                            <tr>
	                                              <td style='width: 32px;' width='34' valign='middle' align='center'>
	                                                <!--===================================================-->
	                                                <!--|                   SOCIAL LINK                   |-->
	                                                <!--===================================================-->
	                                                <a href='https://plus.google.com/u/1/110774673951955400005' style='border: none; color: inherit; display: block; font-family: Arial, sans-serif; font-size: inherit; outline: none; text-decoration: none; width: 32px;'>
	                                                  <img src='http://restberry.ru/images/google+.png' alt='fb' style='-ms-interpolation-mode: bicubic; border: 0; display: block; outline: 0; text-decoration: none; width: 32px;' width='32' border='0' mc:edit='s19 img 5' editable='true'
	                                                  />
	                                                </a>
	                                              </td>
	                                              <td style='width: 10px; font-size: 1px;' width='10' valign='top' align='left'>&nbsp;</td>
	                                            </tr>
	                                          </table>
	                                          <!--[if gte mso 9]>
	                                          </td>
	                                          <td align='left' valign='top'>
	                                          <![endif]-->
	                                          <table style='margin: 0; mso-table-lspace: 0; mso-table-rspace: 0; padding: 0; width: 42px;' width='42' cellspacing='0' cellpadding='0' border='0' align='left'>
	                                            <tr>
	                                              <td colspan='2' style='height: 10px; line-height: 10px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
	                                            </tr>
	                                            <tr>
	                                              <td style='width: 32px;' width='32' valign='top' align='left'>
	                                          </table>
	                                          <!--[if gte mso 9]>
	                                          </td>
	                                          </tr>
	                                          </table>
	                                          <![endif]-->
	                                        </td>
	                                      </tr>
	                                    </table>
	                                  </td>
	                                </tr>
	                                <tr>
	                                  <td style='height: 35px; line-height: 35px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
	                                </tr>
	                                <tr>
	                                  <td style='cursor: default; color: #FFFFFF; font-family: Arial, sans-serif; font-size: 20px; font-weight: 700; line-height: 20px; mso-line-height-rule: exactly;' valign='top' align='left' mc:edit='s19 header2_2'>
	                                    <multiline>
	                                      <!--===================================================-->
	                                      <!--|                    HEADER 2                    |-->
	                                      <!--===================================================-->
	                                      <font face='Arial, sans-serif'>Контакты</font>
	                                    </multiline>
	                                  </td>
	                                </tr>
	                                <tr>
	                                  <td style='height: 20px; line-height: 20px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
	                                </tr>
	                                <tr>
	                                  <td valign='top' align='left'>
	                                    <table class='p100' style='margin: 0; mso-table-lspace: 0; mso-table-rspace: 0; padding: 0; width: 260px;' width='260' cellspacing='0' cellpadding='0' border='0'>
	                                      <tr>
	                                        <td align='left' valign='top'>
	                                          <table class='p100' style='margin: 0; mso-table-lspace: 0; mso-table-rspace: 0; padding: 0; width: 260px;' width='260' cellspacing='0' cellpadding='0' border='0'>
	                                            <!--===================================================-->
	                                            <!--|                    LIST ITEM                    |-->
	                                            <!--===================================================-->
	                                            <tr class='bullet_box'>
	                                              <td valign='middle' style='width: 20px;' width='20' align='left'>
	                                                <img src='https://restberry.ru/images/s18_bullet.png' alt='' style='-ms-interpolation-mode: bicubic; border: 0; display: block; outline: none; text-decoration: none; width: 7px;' width='7' border='0' mc:edit='s19 img 9' editable='true'
	                                                />
	                                              </td>
	                                              <td class='bullet' style='color: #FFFFFF; font-size: 14px; font-weight: 400; line-height: 23px; mso-line-height-rule: exactly;' valign='top' align='left'>
	                                                <a href='https://restberry.ru' class='text2' style='border: none; color: #FFFFFF; display: block; font-family: Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 23px; outline: none; text-decoration: none;'><font face='Arial, sans-serif'>www.restberry.ru</font>
	                                                </a>
	                                              </td>
	                                            </tr>
	                                            <!--===================================================-->
	                                            <!--|                 LIST ITEM - END                 |-->
	                                            <!--===================================================-->
	                                            <!--===================================================-->
	                                            <!--|                    LIST ITEM                    |-->
	                                            <!--===================================================-->
	                                            <tr class='bullet_box'>
	                                              <td valign='middle' style='width: 20px;' width='20' align='left'>
	                                                <img src='https://restberry.ru/images/s18_bullet.png' alt='' style='-ms-interpolation-mode: bicubic; border: 0; display: block; outline: none; text-decoration: none; width: 7px;' width='7' border='0' mc:edit='s19 img 10' editable='true'
	                                                />
	                                              </td>
	                                              <td class='bullet' style='color: #FFFFFF; font-size: 14px; font-weight: 400; line-height: 23px; mso-line-height-rule: exactly;' valign='top' align='left'>
	                                                <a href='#' class='text2' style='border: none; color: #FFFFFF; display: block; font-family: Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 23px; outline: none; text-decoration: none;'><font face='Arial, sans-serif'>+7 999 724 76 00</font>
	                                                </a>
	                                              </td>
	                                            </tr>
	                                            <!--===================================================-->
	                                            <!--|                 LIST ITEM - END                 |-->
	                                            <!--===================================================-->
	                                            <!--===================================================-->
	                                            <!--|                    LIST ITEM                    |-->
	                                            <!--===================================================-->
	                                            <tr class='bullet_box'>
	                                              <td valign='middle' style='width: 20px;' width='20' align='left'>
	                                                <img src='https://restberry.ru/images/s18_bullet.png' alt='' style='-ms-interpolation-mode: bicubic; border: 0; display: block; outline: none; text-decoration: none; width: 7px;' width='7' border='0' mc:edit='s19 img 11' editable='true'
	                                                />
	                                              </td>
	                                              <td class='bullet' style='color: #FFFFFF; font-size: 14px; font-weight: 400; line-height: 23px; mso-line-height-rule: exactly;' valign='top' align='left'>
	                                                <a href='mailto: support@restberry.ru' class='text2' style='border: none; color: #FFFFFF; display: block; font-family: Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 23px; outline: none; text-decoration: none;'><font face='Arial, sans-serif'>support@restberry.ru</font>
	                                                </a>
	                                              </td>
	                                            </tr>
	                                            <!--===================================================-->
	                                            <!--|                 LIST ITEM - END                 |-->
	                                            <!--===================================================-->
	                                          </table>
	                                        </td>
	                                      </tr>
	                                    </table>
	                                  </td>
	                                </tr>
	                                <tr>
	                                  <td style='height: 30px; line-height: 30px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
	                                </tr>
	                                <tr>
	                                  <td class='hide' style='height: 30px; line-height: 30px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
	                                </tr>
	                        </table>

	                      </td>
                    	</tr>
                  	</table>
                </td>
            </tr>
        </table>
            
            <table class='wrapper' width='600' border='0' cellspacing='0' cellpadding='0' align='center' >
			<tr>
				<td>
				<table style='background-color: #15121F; margin: 0; mso-table-lspace: 0; mso-table-rspace: 0; padding: 0; width: 600px;' width='600' cellspacing='0' cellpadding='0' border='0' bgcolor='#15121F'>
					<tr>
	                    <td class='space-top' style='height: 30px; line-height: 30px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
	                </tr>
	                <tr>
	                <td align='center' valign='top'>
	                      <td align='center' valign='top'>
	                              <table class='p100' style='margin: 0; mso-table-lspace: 0; mso-table-rspace: 0; padding: 0; width: 350px;margin-left: 50px;' width='350' cellspacing='0' cellpadding='0' border='0' align='left'>
	                                <tr>
	                                  <td style='cursor: default; color: #7E797D; font-family: Arial, sans-serif; font-size: 13px; font-weight: normal; letter-spacing: 0.02em; line-height: 20px; text-align: left; mso-line-height-rule: exactly;' valign='top' align='left' mc:edit='s20 text 1'>
	                                    <multiline>
	                                      <!--===================================================-->
	                                      <!--|                   FOOTER TEXT                   |-->
	                                      <!--===================================================-->
	                                      <font face='Arial, sans-serif'>&copy; Restberry 2019. All right reserved.</font>
	                                    </multiline>
	                                  </td>
	                                </tr>
	                                <tr>
	                                  <td style='height: 10px; line-height: 10px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
	                                </tr>
	                              </table>
	                              <!--[if gte mso 9]>
	                              </td>
	                              <td align='left' valign='top' width='150'>
	                              <![endif]-->
	                              <table class='p100' style='margin: 0; mso-table-lspace: 0; mso-table-rspace: 0; padding: 0; width: 150px;' width='150' cellspacing='0' cellpadding='0' border='0' align='left'>
	                                <tr>
	                                  <td align='right' valign='top'>
	                                    <table class='p100' style='margin: 0; mso-table-lspace: 0; mso-table-rspace: 0; padding: 0; margin-right: 20px;' cellspacing='0' cellpadding='0' border='0' align='right'>
	                                      <tr>
	                                        <td align='left' valign='top'><font face='Arial, sans-serif'>
	                                        	<!--===================================================-->
	                                            <!--|                UNSUBSCRIBE LINK                |-->
	                                            <!--===================================================-->
	                                             <unsubscribe style='border: none; color: #a5a5a5; display: block; font-family: Arial, sans-serif; font-size: 13px; font-weight: normal; letter-spacing: 0.02em; line-height: 23px; outline: none; text-align: left; text-decoration: underline;' class='text2'>Отписаться</unsubscribe></font>
	                                        </td>
	                                      </tr>
	                                    </table>
	                                  </td>
	                                </tr>
	                              </table>
	                      </td>
	                          </tr>
	                          <tr>
	                            <td class='space-bottom' style='height: 30px; line-height: 30px; font-size: 1px; mso-line-height-rule: exactly;' valign='top' align='left'>&nbsp;</td>
	                          </tr>
	                        </table>
	                      </td>
	                      <td style='width: 30px; font-size: 1px;' width='30' valign='top' align='left'>&nbsp;</td>
	                </td>
	              </tr>
	            </table>
	          </td>
	        </tr>
	      </table>

	</body>
</html>



"
    ));
}

$result = $mgClient->post("lists/$listAddress/members", array(
    'address'     => $email,
    'subscribed'  => 'no'
));

header("Location: https://restberry.ru");
exit;