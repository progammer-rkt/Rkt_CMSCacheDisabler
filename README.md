# Rkt_CMSCacheDisabler
This is a small extension which is used to disable full page cache from all cms pages in Magento.

# Details

This is a magento extension which can be used to disable full page cacheing of all cms pages. That is with this module, you will see a not-cached page when you try to see a cms page in magento application.

For the sake of illustration, suppose you have a cms page which is setup like this.

![cms page](/../assets/img/cmspage.png?raw=true "Optional Title")

Now if you access the above cms page like this  : `www.yourdomain.com/testcms`, then you will see the cms page without having any cacheing.

# Supporting versions

This is tested only in `magento-1.9.1`. However it would work for almost all other versions which is greater than 1.4.

# Pros & Cons

### Pros

1. This extension did not touch any core files.

2. Followed magento best practices

3. Every files documented well.

### cons

nil

# Installation

1. Download the zip file.

2. Unzip it and merge `app` folder in root directory of magento.

3. Clear all cache.

4. DOne.
