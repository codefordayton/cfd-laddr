Customizations to [Laddr](https://github.com/CodeForPhilly/laddr) for Code For Dayton.

To make changes to the site, you need to have developer access to the codefordayton.org laddr instance. If you need this, contact @DavidEBest.

Essentially, logging into the [Developer Console](http://codefordayton.org/develop) gives you direct access to the source running the site. We don't have a separate staging instance set up; if we decide to do more than minor styling changes, that'll need to be added.

From the developer console, you'll see a directory tree of files and folders. The `_parent (v2.laddr.us)` folder contains the data and logic that runs the site. Most of the other folders are empty placeholders that allow you to override any file in `parent`. To make changes, simply copy the file you wish to alter from `parent` and into the appropriate folder and make changes. Saving the file and refreshing should be all you need to see the changes take effect.

Once you are finished making changes, click on `Emergence`\`Export` to download a zip of the changes. The contents of that zip file are then saved to this repo.

Not thrilled with this workflow, so feel free to suggest ways to improve it. :)
