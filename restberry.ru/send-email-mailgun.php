<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'Mailgun/vendor/autoload.php';
use Mailgun\Mailgun;

require_once 'mailgun-settings.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Update in version 1.1 - added validation to stop blank emails
if($email){
    # Instantiate the client.
    $mgClient = new Mailgun($mailgunKey);

    # Make the call to the client.
    $mgClient->sendMessage($domain,
                      array('from'    => $email,
                            'to'      => $corpEmail,
                            'subject' => 'Форма для отправки сообщений в Footer',
                            'html'    => 'Здравствуйте, меня зовут '.$name.'<br>'.$message.'<br>'.$email));


    $mgClient->sendMessage($domain,
                      array('from'    => $corpEmail,
                            'to'      => $email,
                            'subject' => 'Отправленное сообщение',
                            'html'    => "
<!-- Section-1 -->
<table class='table_full editable-bg-color bg_color_e6e6e6 editable-bg-image' bgcolor='#e6e6e6' width='100%' align='center'  mc:repeatable='castellab' mc:variant='Header' cellspacing='0' cellpadding='0' border='0'>
	<tr>
		<td>
			<!-- container -->
			<table class='table1 editable-bg-color bg_color_303f9f' bgcolor='#119822' width='600' align='center' border='0' cellspacing='0' cellpadding='0' style='margin: 0 auto;'>
				<!-- padding-top -->
				<tr><td height='25'></td></tr>
				<tr>
					<td>
						<!-- Inner container -->
						<table class='table1' width='520' align='center' border='0' cellspacing='0' cellpadding='0' style='margin: 0 auto;'>
							<tr>
								<td>
									<!-- logo -->
									<table align='left' border='0' cellspacing='0' cellpadding='0'>
										<tr>
											<td align='left'>
												<a href='https://restberry.ru' class='editable-img'>
													<img editable='true' mc:edit='image001' src='http://restberry.ru/images/logo.png' width='100' style='display:block; line-height:0; font-size:0; border:0;' border='0' alt='logo' />
												</a>
											</td>
										</tr>
										<tr><td height='22'></td></tr>
									</table><!-- END logo -->

								</td>
							</tr>

							<!-- horizontal gap -->
							<tr><td height='60'></td></tr>

							<tr>
								<td align='center'>
									<div class='editable-img'>
										<img editable='true' mc:edit='image003' src='http://restberry.ru/images/get-message.png' width='80'  style='display:block; line-height:0; font-size:0; border:0;' border='0' alt='' />
									</div>
								</td>
							</tr>

							<!-- horizontal gap -->
							<tr><td height='40'></td></tr>

							<tr>
								<td mc:edit='text001' align='center' class='text_color_ffffff' style='color: #ffffff; font-size: 30px; font-weight: 700; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;'>
									<div class='editable-text'>
										<span class='text_container'>
											<multiline style='cursor: default;'>
												 Ожидайте ответа
											</multiline>
										</span>
									</div>
								</td>
							</tr>

							<!-- horizontal gap -->
							<tr><td height='30'></td></tr>

							<tr>
								<td mc:edit='text002' align='center' class='text_color_ffffff' style='color: #ffffff; font-size: 12px; font-weight: 300; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;'>
									<div class='editable-text'>
										<span class='text_container'>
											<multiline style='cursor: default;'>
												$date
											</multiline>
										</span>
									</div>
								</td>
							</tr>
						</table><!-- END inner container -->
					</td>
				</tr>
				<!-- padding-bottom -->
				<tr><td height='104'></td></tr>
			</table><!-- END container -->
		</td>
	</tr>

	<tr>
		<td>
			<!-- container -->
			<table class='table1 editable-bg-color bg_color_ffffff' bgcolor='#ffffff' width='600' align='center' border='0' cellspacing='0' cellpadding='0' style='margin: 0 auto;'>
				<!-- padding-top -->
				<tr><td height='50'></td></tr>

				<tr>
					<td>
						<!-- container_400 -->
						<table class='container_400' align='left' border='0' cellspacing='0' cellpadding='0' style='margin: 0 auto;'>
							
							<tr>
								<td mc:edit='text003' class='text_color_282828' style='cursor: default; color: #282828; font-size: 15px; line-height: 2; font-weight: 700; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;'>
									<div class='editable-text' style='line-height: 1.5;'>
										<span class='text_container'>
											<multiline>
												Здравствуйте,
											</multiline>
										</span>
									</div>
								</td>
							</tr>

							<!-- horizontal gap -->
							<tr><td height='20'></td></tr>

							<tr>
								<td mc:edit='text003' class='text_color_282828' style='cursor: default; color: #282828; font-size: 15px; line-height: 2; font-weight: 500; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;'>
									<div class='editable-text' style='line-height: 1.5;'>
										<span class='text_container'>
											<multiline>
												Спасибо за ваше сообщение. Мы стараемся отвечать как можно быстрее и свяжемся с вами в ближайшее время.
											</multiline>
										</span>
									</div>
								</td>
							</tr>

							<!-- horizontal gap -->
							<tr><td height='20'></td></tr>

							<tr>
								<td mc:edit='text005' class='text_color_282828' style='cursor: default; color: #282828; font-size: 15px;line-height: 2; font-weight: 500; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;'>
									<div class='editable-text' style='line-height: 1.5;'>
										<span class='text_container'>
											<multiline>
												С уважением,<br>Команда Restberry
											</multiline>
										</span>
									</div>
								</td>
							</tr>
						</table><!-- END container_400 -->
					</td>
				</tr>

				<!-- padding-bottom -->
				<tr><td height='50'></td></tr>
			</table><!-- END container -->
		</td>
	</tr>

	<tr>
		<td>
			<!-- container -->
			<table class='table1' width='540' align='center' border='0' cellspacing='0' cellpadding='0' style='margin: 0 auto;'>
				<!-- padding-top -->
				<tr><td height='40'></td></tr>

				<tr>
					<td>
						<!--  column-1 -->
						<table class='table1-2' width='350' align='left' border='0' cellspacing='0' cellpadding='0'>
							<tr>
								<td mc:edit='text006' align='left' class='center_content text_color_929292' style='color: #929292; font-size: 14px; font-weight: 400; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;'>
									<div class='editable-text' style='line-height: 1.5;'>
										<span class='text_container'>
											<multiline>
												<span style='cursor: default;'>По любым вопросам, Вы можете обращаться в службу поддержки пользователей по адресу - <a href='mailto:support@restberry.ru' style='color: #119822; text-decoration: none;'>support@restberry.ru</a></span>
											</multiline>
										</span>
									</div>
								</td>
							</tr>

							<!-- horizontal gap -->
							<tr><td height='10'></td></tr>

							<!-- horizontal gap -->
							<tr><td height='10'></td></tr>

							<tr>
								<td mc:edit='text008' align='left' class='center_content' style='color: #929292; font-size: 14px;font-weight: 400; font-family: lato, Helvetica, sans-serif; '>
									<div class='editable-text' style='line-height: 1.5;'>
										<span class='text_container'>
											<multiline>
												<span style='cursor: default;'>Наша команда работает для Вас!</span>
											</multiline>
										</span>
									</div>
								</td>
							</tr>

							<!-- margin-bottom -->
							<tr><td height='30'></td></tr>
						</table><!-- END column-1 -->

						<!-- vertical gap -->
						<table class='tablet_hide' width='130' align='left' border='0' cellspacing='0' cellpadding='0'>
							<tr><td height='1'></td></tr>
						</table>

						<!-- column-2  -->
						<table class='table1-2' width='120' align='right' border='0' cellspacing='0' cellpadding='0'>
							<tr>
								<td>
									<table width='120' align='center' style='margin: 0 auto;'>
										<tr>
											<!-- facebook -->
											<td align='center' width='30'>
												<a href='https://www.facebook.com/groups/958879297833523/' style='border-style: none !important; display: inline-block;; border: 0 !important;' class='editable-img'>
													<img editable='true' mc:edit='image004' src='http://restberry.ru/images/facebook.png' width='20' style='display:block; line-height:0; font-size:0; border:0;' border='0' alt='' />
												</a>
											</td>

											<!-- vertical gap -->
											<td width='15'></td>

											<!-- instagram -->
											<td align='center' width='30'>
												<a href='https://www.instagram.com/restberry.ru/' style='border-style: none !important; display: inline-block; border: 0 !important;' class='editable-img'>
													<img editable='true' mc:edit='image005' src='http://restberry.ru/images/instagram.png' width='25' style='display:block; line-height:0; font-size:0; border:0;' border='0' alt='' />
												</a>
											</td>

											<!-- vertical gap -->
											<td width='15'></td>

											<!-- twitter -->
											<td align='center' width='30'>
												<a href='https://twitter.com/y0dTZB7kXAaJG0L' style='border-style: none !important; display: inline-block; border: 0 !important;' class='editable-img'>
													<img editable='true' mc:edit='image005' src='http://restberry.ru/images/twitter.png' width='22' style='display:block; line-height:0; font-size:0; border:0;' border='0' alt='' />
												</a>
											</td>

											<!-- vertical gap -->
											<td width='15'></td>

											<!-- google+ -->
											<td align='center' width='30'>
												<a href='https://plus.google.com/u/1/110774673951955400005' style='border-style: none !important; display: inline-block;; border: 0 !important;' class='editable-img'>
													<img editable='true' mc:edit='image006' src='http://restberry.ru/images/google+.png' width='29' style='display:block; line-height:0; font-size:0; border:0;' border='0' alt='' />
												</a>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<!-- margin-bottom -->
							<tr><td height='30'></td></tr>
						</table><!-- END column-2 -->
					</td>
				</tr>
			</table><!-- END container -->
		</td>
	</tr>
</table><!-- END wrapper -->
"));
}
