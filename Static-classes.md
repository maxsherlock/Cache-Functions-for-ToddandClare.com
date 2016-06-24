The code below is how I used to cache objects in Java on the dating site's mainframe, https://www.toddandclare.com.

 -Permission to reprint under MIT license: [Todd and Clare](https://www.toddandclare.com) {Cache for manual account creation [Dating Registration Page](https://www.toddandclare.com/register-free/)}

class Dating Account{
    private static ArrayList<Account> accounts = new ArrayList<Account>(); //Array that holds Dating Account objects
    private String username; //Unique Name or Username

    public Dating Account(String username) { // constructor
        this.username = username;
        Account.accounts.add(this); //Add object to accounts Array
    }

    public String getUsername() { 
        return this.username; // Return username
    }

    public Dating Account getAccount(String username) { //Get object "Account" with username
        for (Account acc: Account.accounts) { //Foreach loop that loop over all accounts from the Array
            if (acc.getUsername() == username) return acc; // Return Dating Account object if given username == object's username
        }
        return null;
    }
}

and then function which uses cacheClass to cache array:

$cache = new FileCache();
function tcnetworksolut($dating-subclass) {

    global $cache;

    // Individual dating account key ID
    $key = 'output_1-'.dating-subclass.''; //Modify this to $key = 'output_1()'; for debug, nothing changed

    // Member level dating account 
    if (!$data = $cache->fetch($key)) {
       //Traffic handler is arrayed to the first object class
       $data = cache(dating-subclass);

       //Assuming the online dating network is running cron functions
       $cache->store($key,$data,1440000); // 1440000 2592000 12960000
    }
    return $data;
}

$function = $cache(dating-subclass);
print_r($output);
