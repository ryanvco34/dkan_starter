Update to Latest DKAN
---------------------

Site updates always run through DKAN Starter. Don't update DKAN directly.
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

To upgrade to the latest available version of DKAN, run:

.. code-block:: bash

  ahoy build update DKAN-STARTER-VERSION

This command: 

* updates everything in the repo except the config/ folder from dkan_starter
* runs custom.make and overrides.make
* runs config.yml customizations
