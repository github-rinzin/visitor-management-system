Initial Setup

Prerequisites
The setups steps expect following tools installed on the system. - Git - XAMPP

1. Clone the repository into xampp htdocs
git clone git@bitbucket.org:selise07/dgpc-eas.git

cd dgpc-eas

2. Create and set up database
php artisan db:migrate
