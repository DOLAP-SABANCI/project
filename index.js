function sendEmail() {
	Email.send({
	Host: "smtp.gmail.com",
	Username : "sysengist@gmail.com",
	Password : "4arctan(1)",
	To : 'ilhan1yildirim@gmail.com',
	From : "sysengist@gmail.com",
	Subject : "<email subject>",
	Body : "<email body>",
	}).then(
		message => alert("mail sent successfully")
	);
}
