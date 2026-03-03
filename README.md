# Magento 2 WhatsApp Button Module

A simple and customizable WhatsApp button module for Magento 2 that allows customers to contact you directly via WhatsApp.
Tested on MageOs

## Features

- **Easy Integration**: Simple installation and configuration
- **Customizable Position**: Choose from 4 different button positions (top-left, top-right, bottom-left, bottom-right)
- **Configurable Appearance**: Customize button text and color
- **Admin Configuration**: Full control through Magento Admin panel
- **Responsive Design**: Works on all devices
- **Clean Code**: Follows Magento 2 best practices

<b>Backoffice</b>
<img width="1920" height="1406" alt="image" src="https://github.com/user-attachments/assets/f2e975b6-c858-4e7e-aa02-98ef8607026f" />

<b>Frontend</b>
<img width="1920" height="869" alt="image" src="https://github.com/user-attachments/assets/e487c561-1723-47ee-9470-28b492ac9d5d" />




## Installation

### Option 1: Composer Installation

1. Install the module via Composer:
   composer require zefbrito/magento2-whatsapp
2. Enable the module and run setup:
   php bin/magento module:enable Zefbrito_Whatsapp
   php bin/magento setup:upgrade
   php bin/magento setup:di:compile
   php bin/magento setup:static-content:deploy
   php bin/magento cache:flush

### Option 2: Manual Installation

1. Download and extract the module files
2. Copy the module files to `app/code/Zefbrito/Whatsapp/` in your Magento 2 installation
   php bin/magento module:enable Zefbrito_Whatsapp
   php bin/magento setup:upgrade
   php bin/magento setup:di:compile
   php bin/magento setup:static-content:deploy
   php bin/magento cache:flush

