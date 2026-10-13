\# Atelier de Diagnostic Automobile 

WordPress website for an automotive workshop.

## How to run

This project is a local WordPress website for an automotive diagnostic workshop.

#### 1. Install the required software

Before running the project,install:

- LocaLWP
- Git
- A web browser such as Google chrome or Microsoft Edge

  ### 2. Clone the repository
  
  open Git Bash or Command prompt and run :

  ```bash
  git clone https://github.com/rawanharmouch1/Atelier-de-diagnostic-automobile.git  
```
Then open the project folder:

```bash
cd Atelier-de-diagnostic-automobile
```

### 3. Create a new WordPress site in LocaLWP

Open LocalWP and create a new local WordPress site.

Wait until LocalWP finishes creating the site. 

### 4. Open the WordPress public folder 

In LocalWP, open the site folder and go to:
```text 
app/public
```

### 5. Copy the project files 

copy all files from the cloned repository into:
``` text
app/public
```
`Replace the existing WordPress files if Windos asks for confirmation.`

### 6. Import the database 

In LocalWP ,  open: 

Database > Open Adminer 

select the local database and click Import.

Import this file:

``` text
local-20261005-200656.sql
```
 ### 7. Check the database configuration 
 
 Open:
```text
wp-config.php
```
Make sure the database setting match the LocalWP database information .
Example:
```php
define(`DB_NAME`, `local`);
define(`DB_USER`, `root`);
define(`DB_PASSWORD`, `root`);
define(`DB_HOST`, `localhost`);
```
### 8. Start the website 

Go back to LocalWP and click :

Start site 

then click:

Open site 

the website should now open in your browser.

### 9. Open the WordPress dashboard 
In LocalWP, click:

WP Admin

Then log in to the WordPress dashboard .




