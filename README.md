# Expression Engine: URL Encoder Add-On
An add-on for Expression Engine 3 or newer to url encode strings with the PHP [rawurlencode()](https://www.php.net/manual/en/function.rawurlencode.php) function  or [urlencode()](https://www.php.net/manual/en/function.urlencode.php) function.

## Installation

1. Copy the urlencoder directory into your system/user/addons folder
2. Login to your Expression Engine installation, go to Developer --> Add-Ons 
3. Install the urlencoder add-on

## Usage

```{exp:urlencoder}String you want to encode{/exp:urlencoder}```    
```{exp:urlencoder raw="no"}String you want to encode{/exp:urlencoder}```

### Example: 

The urlencoder add-on will turn this:    
```{exp:urlencoder}String you want to encode{/exp:urlencoder}```

into this:    
```String%20you%20want%20to%20encode```

And this:    
```{exp:urlencoder raw="no"}String you want to encode{/exp:urlencoder}```

into this:    
```String+you+want+to+encode```
