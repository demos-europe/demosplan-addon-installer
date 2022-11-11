### How to use/test?

- This needs to be added as a dependency to all future demosplan-addons in their composer.jsons like this (change version depending):
 ```
 "require": {
          "demos/dplan-addon-installer": "dev-main"
        }
 ```

For testing purposes:
- create a composer-test folder in your demosplan main directory. Add the whole demosplan-addon-installer folder in there.
- Now you can add this folder as a local repository to your main composer.json file or addons.json like this:
```
"repositories": [
    {
      "type": "path",
      "url": "../composer-test/dplan-addon-installer"
    }
  ],
```

