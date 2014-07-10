# Xhtml

This plugin converts certain characters into typographically correct entities.

Quotes are converted to curly quotes, hyphens into em-dashes, three periods into elipsis, etc.

There are two ways to use this plugin depending on whether you want line breaks turned into &lt;p&gt; tags.

The "light" version is used this way:

    {exp:xhtml:light}

        text you want processed

    {/exp:xhtml:light}


The full version like this:

    {exp:xhtml:full}

        text you want processed

    {/exp:xhtml:full}


## Change Log

- Version 1.1
    - Updated plugin to be 2.0 compatible
