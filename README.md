# Swiftsearch

[Swiftype](http://swiftype.com/) search service integration for the [Elefant CMS](https://www.elefantcms.com/).

## Installation

Once you've signed up for Swiftype, the easiest way to install the app is:

1. Log into Elefant as a site admin
2. Go to Designer > Install App/Theme
3. Paste the following link into the installer link:

```
https://github.com/jbroadway/swiftsearch/archive/master.zip
```

Alternately, you can install Swiftsearch from the command line with the following commands:

```
cd /path/to/your/site
./elefant install https://github.com/jbroadway/swiftsearch/archive/master.zip
```

## Usage

To configure Swiftype for your website:

1. In the Elefant admin toolbar, go to Swiftsearch and follow the steps to complete your setup.
2. Add the new `Search` page to your site navigation under Administration > Navigation, or add the `Search Box` dynamic object to the contents of a page or content block.
3. To embed the search form in a template, use the following code:

```
{! swiftsearch/form !}
```
