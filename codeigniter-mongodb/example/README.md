## How to install & configure

Download the repo and unzip it. You will see 2 folder config and libraries. Paste those 2 folder in your codeigniter application folder.

After this, you will see mongo_db.php file in your app/config and app/libraries folder of codeigniter setup.

Now its time to configure ci mongo library as per mongodb login details.

1) Open config/mongo_db.php file and set mongodb login details.

2) Open config/autoload.php file and add 'mongo_db' in $autoload['libraries'] array.

Thats it. Installation and Configuration completed. By default library connect to database provided in "default" group.

Now you can access the methods using `$this->mongo_db->` in your controller as well as in model.

## Need more then one database connection ??

You can have more then one database in your application and you can use them simultaneously in your app just like Codeigniter Active Data Record.

1) Open `app/config/mongo_db.php` file and create one more database group inside that file. For example

```php
$config['mongo_db']['newdb']['hostname'] = 'localhost';
$config['mongo_db']['newdb']['port'] = '27017';
$config['mongo_db']['newdb']['username'] = 'username';
$config['mongo_db']['newdb']['password'] = 'password';
$config['mongo_db']['newdb']['database'] = 'database';
$config['mongo_db']['newdb']['db_debug'] = TRUE;
$config['mongo_db']['newdb']['write_concerns'] = (int)1;
$config['mongo_db']['newdb']['journal'] = TRUE;
$config['mongo_db']['newdb']['read_preference'] = NULL;
$config['mongo_db']['newdb']['read_preference_tags'] = NULL;

```

You can change group name from "newdb" to anything else you want. After changing the group name, save the file.

2) Now open your controller or model file, where you need another database connection active and write below code in the constructor of the class.

`$this->load->library('mongo_db', array('activate'=>'newdb'),'mongo_db2');` This will make new connection on new mongoDB and make it available to use as `$this->mongo_db2->` inside class

## Insert Methods

- insert Insert a new document into a collection
- batch_insert Insert multiple new documents into a collection

## Find Methods

- select Get select fields from returned documents
- where OR get_where Where section of the query
- where_in Where something is in an array of something
- where_in_all Where something is in all of an array of * something
- where_not_in Where something is not in array of something
- where_or Where something is based on or
- where_gt Where something is greater than something
- where_gte Where something is greater than or equal to something
- where_lt Where something is less than something
- where_lte Where something is less than or equal to something
- where_between Where something is in between to something
- where_between_ne Where something is in between and but not equal to something
- where_ne Where something is not equal to something
- like Where something is search by like query
- order_by Order the results
- limit OR offset Limit the number of returned results
- count Document Count based on where query
- distinct Retrieve a list of distinct values for the given key across a single collection
- find_one Retrieve single document from collection

## Update Methods

- set Sets a field to a value
- unset_field Unsets a field
- addtoset Adds a value to an array if doesn't exist
- push Pushes a value into an array field
- pop Pops a value from an array field
- pull Removes an array by the value of a field
- rename_field Rename a field
- inc Increments the value of a field
- mul Multiple the value of a field
- max Updates the value of the field to a specified value if the specified value is greater than the current value of the field
- min Updates the value of the field to a specified value if the specified value is less than the current value of the field.
- update Update a single document in a collection
- update_all Update all documents in a collection

## Delete Methods

- delete Delete a single document in a collection
- delete_all Delete all documents in a collection

## Aggregate Methods

- aggregate Perform aggregation query on document

## Profiling Methods

- output_benchmark return complete explain data for all the find based query performed

## Index Methods

- add_index Create a new index on collection
- remove_index Remove index from collection
- list_indexes Show all index created on collections

## DB Methods

- switch_db Switch to a different database
- drop_db Drops a database
- drop_collection Drops a collection

## Extra Methods

- date Create or convert date to MongoDB based Date