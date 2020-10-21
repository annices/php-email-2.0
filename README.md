# General information
The script ”Email 2.0" is created in Sublime by Annice Strömberg ([Annice.se](https://annice.se)), 2019. The script can be used to send emails via a web form. Furthermore, it is built in HTML5, CSS3, and PHP.

---

# License
Released under the MIT license.

MIT: [http://rem.mit-license.org](http://rem.mit-license.org/), see [LICENSE](LICENSE).

---

# 3 System requirements
This script can be run on servers that support PHP.

---

# Supported features
The following features and functions are supported by this script:
* Client and server side validation.
* Responsive design.
* Enclose sender's IP address.

## Changes to version 2.0:
* Added support for responsive layout.
* Added support for client side validation for generally enhanced performance.

---

# User interface
Screenshot of desktop vs. responsive view of the email form:

<img src="https://diagrams.annice.se/php-email-2.0/gui-email-form.png" alt="" width="700">

---

# Setup guide
1. Open the file "contact.php" and change to your email address and time zone at the top of the file:

```php
<?php
$to = 'your@email.com'; // Change to your email address.

$timezone = 'Europe/Stockholm'; // Change to your time zone (https://secure.php.net/manual/en/timezones.php).
```

2. Upload the folder "php-email-2.0" to your PHP supported server and navigate to "contact.php" to start sending emails.

---

# 9 Contact details
For general feedback related to this script, such as any discovered bugs etc., you can contact me via the following email address: [info@annice.se](mailto:info@annice.se)
