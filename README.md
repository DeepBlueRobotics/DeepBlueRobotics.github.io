> [!CAUTION]
> **THE INSTRUCTION BELOW ARE NOW DEFUNCT. Starting in August 2024, the team's website was moved to a Wordpress site hosted through the school's business club, sponsored by Mr. Rowe. Lead mentors can provide students with access to the Wordpress account.**

# Introduction

These are instructions for maintaining the [carlmontrobotics.org](http://www.carlmontrobotics.org/) website. 

There are three types of changes that you might want to make:

 * Changes to *content* like text and images. Content changes also include changes to basic text formatting such as bold, italics, lists, and links, but *don't* include things like font or font size. **You don't need any special skills to make content changes.**
 * Changes to *layout and styling*. Layout and styling dictate where and how various bits of content are displayed on a page. Layout and styling includes fonts, font sizes, colors, positioning, and how the page will appear on different devices or in different sized windows. To make layout and styling changes, you will need to know [HTML](https://developer.mozilla.org/en-US/docs/Web/HTML) and [CSS](https://developer.mozilla.org/en-US/docs/Web/CSS) so that the site will look attractive and work effectively across devices. You will also need a working understanding of [Jekyll](https://jekyllrb.com/docs/).
 * Changes to *structure*. Structure changes include changes to the types of content on a page, how the various bits of content relate to each other, and which page contains which content. Adding or deleting pages or sections of pages are examples of structure changes. To make structure changes you will need to know how to configure [NetlifyCMS](https://www.netlifycms.org/) so that content editors can continue to make changes to the content without needing any special skills.

Making changes to the carlmontrobotics.org website involves the following steps:

 1. An editor makes the changes to the staging website, deepbluerobotics.github.io.
 2. The editor requests that the changes be merged into the production website, carlmontrobotics.org.
 3. A reviewer approves the changes and merges them into the production website, carlmontrobotics.org.

The editor and reviewer both need to have GitHub accounts. If you don't have one, just [sign up](https://github.com/join). 

Editors need to be members of the "webeditors" team in the DeepBlueRobotics organization. If you get a 404 error or aren't listed when you follow [this link](https://github.com/orgs/DeepBlueRobotics/teams/webeditors/members), then to become an editor:
 1. Send a message to the programming subteam lead or programming subteam lead mentor saying something like, "Please add me to the `webeditors` team in the DeepBlueRobotics organization using the 'Add a member' button on this page: https://github.com/orgs/DeepBlueRobotics/teams/webeditors/members. If I'm not already in the organization, you'll first need to invite me using the 'Invite member' button on this page: https://github.com/orgs/DeepBlueRobotics/people".
 2. If you needed to invited, accept the invitation that you are emailed.
 

Reviewers are **mentors** and they need to be members of the "webreviewers" team in the DeepBlueRoboticsMentors organization. If you get a 404 error or aren't listed when you follow [this link](https://github.com/orgs/DeepBlueRoboticsMentors/teams/webreviewers/members), then to become a reviewer
 1. Send a message to the programming subteam lead mentor saying something like, "Please add me to the `webreviewers` team in the DeepBlueRobotics organization using the 'Add a member' button on this page: https://github.com/orgs/DeepBlueRoboticsMentors/teams/webreviewers/members. If I'm not already in the organization, you'll first need to invite me using the 'Invite member' button on this page: https://github.com/orgs/DeepBlueRoboticsMentors/people".
 2. If you needed to invited, accept the invitation that you are emailed.

[Making changes is easy](#making-changes-online) and can be done from any modern web browser. More advanced users can also [make changes offline](#making-changes-offline) using open source tools running on a MacOS or Linux machine. If you are curious how the site works, take a look [behind the scenes](#behind-the-scenes).

# Making Changes Online

The easiest way to make changes is using any modern web browser. 

**Note: After you make a change, you may receive an email from GitHub indicating that there was a "Page build warning" because "The CNAME `www.carlmontrobotics.org` is already taken". You can safely ignore that warning.**

## Changing Content

To change content:
 1. Go to https://deepbluerobotics.github.io/admin. If prompted, sign in to GitHub and give the NetlifyCMS application permission to write to the "DeepBlueRobotics.github.io" repository in the DeepBlueRobotics organization.
 2. Select the page you want to edit. The various bits of content on that page will be displayed in a way that allows you to edit them.
 3. Make the changes you want.
 4. Click `Publish` in the upper right corner and select `Publish Now`. It should only take a few seconds for your changes to show up at https://deepbluerobotics.github.io. If you aren't sure whether the publication process has finished yet, you can check https://github.com/DeepBlueRobotics/DeepBlueRobotics.github.io/deployments to see how recently the last deployment occurred.
 5. Repeat steps 2 through 4 for each page that has content you want to change.
 6. Follow [the instructions for requesting that your changes be merged into www.carlmontrobotics.org](#requesting-merging-of-changes-into-the-production-website).

## Changing Layout and Styling

To change layout and styling you will need to know [HTML](https://developer.mozilla.org/en-US/docs/Web/HTML) and [CSS](https://developer.mozilla.org/en-US/docs/Web/CSS) and a working understanding of [Jekyll](https://jekyllrb.com/docs/). The site is hosted by [GitHub Pages](https://help.github.com/en/github/working-with-github-pages) which uses Jekyll to regenerate the site from the source files whenever a source file is changed. You can change the files online at https://github.com/DeepBlueRobotics/DeepBlueRobotics.github.io/.

Once you commit a change, it should only take a few seconds for your changes to show up at https://deepbluerobotics.github.io. If you aren't sure whether the site has been regenerated yet, you can check https://github.com/DeepBlueRobotics/DeepBlueRobotics.github.io/deployments to see how recently the last deployment occurred. 

Once you are happy with how your changes appear on a variety of devices/browsers and with how the admin interface works, follow [the instructions for requesting that your changes be merged into www.carlmontrobotics.org](#requesting-merging-of-changes-into-the-production-website).

## Changing Structure

To change the structure of the site or it's content you will need to know how to configure [NetlifyCMS](https://www.netlifycms.org/) so that content editors can continue to make changes to the content without needing any special skills. You can make structure changes by editing [`admin/config.yml`](https://github.com/DeepBlueRobotics/DeepBlueRobotics.github.io/admin/config.yml) and the site's source files such that the fields in `admin/config.yml` specify appropriate widgets for editing the various parts of the site's source files. For detailed documentation, see [the NetlifyCMS docs](https://www.netlifycms.org/docs/), especially the docs concerning [options for configuring `collections`](https://www.netlifycms.org/docs/configuration-options/#collections).

Once you commit a change, it should only take a few seconds for your changes to show up at https://deepbluerobotics.github.io. If you aren't sure whether the site has been regenerated yet, you can check https://github.com/DeepBlueRobotics/DeepBlueRobotics.github.io/deployments to see how recently the last deployment occurred. 

Once you are happy with how your changes to the site and `admin/config.yml` appear and function on a variety of devices/browsers, follow [the instructions for requesting that your changes be merged into www.carlmontrobotics.org](#requesting-merging-of-changes-into-the-production-website).

## Requesting Merging of Changes into the Production Website

To request inclusion of your changes in the production website, [create a "pull request"](https://github.com/DeepBlueRobotics/DeepBlueRobotics.github.io/pull/new/master) and then let a reviewer know that you have done so.

## Reviewing and Merging Changes into the Production Website

If you've been asked to merge changes into the production website:

 1. Right click on https://github.com/DeepBlueRoboticsMentors/DeepBlueRoboticsMentors.github.io/pulls and select "Open in new window" to see a *list* of requests for changes to be merged into the production website (i.e. "pull requests"). There should be only one open pull request in the list. (If there is more than one, work with the people who are requesting that their changes be merged to figure out which one to merge.) 
 2. Click on the one pull request that is listed.
 3. Confirm that the request is to merge "commits into `DeepBlueRoboticsMentors:master from DeepBlueRobotics:master`". If the request is to merge commits from *someplace else*, you will not be able to review it by looking at the staging site, and you should ask the requester to make the changes to the staging site first.
 4. Review the staging site, https://deepbluerobotics.github.io (right click and open in a new window), and verify that it contains the desired corrections and is no worse than the production site, http://www.carlmontrobotics.org/, ideally on both a computer and a phone. Remember that it doesn't need to be perfect, just better than it was before. Additional changes can always be made in the future.
 5. If you have any comments, you can add them at the bottom of the pull request. Be sure to click Preview above the comment box and review your comment before submitting it.
 6. When you are ready to merge the changes, return to the page containing the pull request, at the bottom, click `Merge Pull Request` and then `Confirm Merge` to merge the pull request.
 7. It should only take a few seconds for your changes to show up at http://www.carlmontrobotics.org/. If you aren't sure whether the site has been regenerated yet, you can check https://github.com/DeepBlueRoboticsMentors/DeepBlueRoboticsMentors.github.io/deployments to see how recently the last deployment occurred. 

 ## Undoing Changes to the Production Website
 
 If a change needs to be undone, the corresponding pull request can be opened and reverted to create a new pull request which undoes it. That pull request should then be merged to undo the changes.

# Making Changes Offline

Although it's not strictly necessary, if you have a Mac or Linux computer and are a power user, you may find it convenient to make and view changes directly on your local computer before pushing them onto the staging site. This can be particularly useful if you need to change multiple files or want to experiment with changes quickly. To do this, you'll need some familiarity with Git and the command line. If you are interested, here is the process:

 1. Clone https://github.com/DeepBlueRobotics/DeepBlueRobotics.github.io.git into a directory on your computer.
 2. Open a shell in that directory.
 3. Install [Ruby](https://www.ruby-lang.org/en/) and [Bundler](https://bundler.io/), if they are not already installed.
 4. Run `bundle install` to install any missing gems.
 5. Install [Node.js](https://nodejs.org/en/) and [npx](https://www.npmjs.com/package/npx), if they are not already installed.
 6. Run `npx netlify-cms-proxy-server &` to run a dummy Netlify CMS identity server in the background.
 7. Run `bundle exec jekyll serve --safe` to use Jekyll to generate a static site at http://127.0.0.1:4000 and update it whenever one of the source files changes.
 8. View the local copy of the site at http://127.0.0.1:4000, and make changes using the admin interface at http://127.0.0.1:4000/admin, or using a text editor.
 9. When you are finished making changes, commit them, pull (resolving conflicts as needed), and push.
 10. [Request merging of your changes into the production website](#requesting-merging-of-changes-into-the-production-website).

# Behind the Scenes

The staging and production websites, are the static [GitHub Pages](https://help.github.com/en/github/working-with-github-pages) sites associated with the [DeepBlueRobotics GitHub organization](https://github.com/DeepBlueRobotics) and the [DeepBlueRoboticsMentors GitHub organization](https://github.com/DeepBlueRoboticsMentors) respectively.

GitHub Pages uses [Jekyll](https://jekyllrb.com/docs/) to generate those sites from corresponding repositories in those organizations. The staging repository is a fork of the production repository. The [Netlify Content Management System](https://www.netlifycms.org/) is an single page add-on that allows non-technical users to use the `/admin` page of a site to edit content in the site's repository.

If you want to fork this repository for use as the GitHub Pages site for a user or different organization (note that the site's internal links won't work if you try to use it as a *project* GitHub Pages site):

1. Fork the https://github.com/DeepBlueRobotics/DeepBlueRobotics.github.io repository to your own account or an organization you can fork to.
2. Rename the forked repository to `<user>.github.io` or `<organization>.github.io`.
3. To make the Netlify CMS admin page work:
    1. Follow the [Creating an GitHub OAuth App](https://cnly.github.io/2018/04/14/just-3-steps-adding-netlify-cms-to-existing-github-pages-site-within-10-minutes.html#creating-an-github-oauth-app) and [Creating a Netlify Site](https://cnly.github.io/2018/04/14/just-3-steps-adding-netlify-cms-to-existing-github-pages-site-within-10-minutes.html#creating-a-netlify-site) parts of [these instructions](https://cnly.github.io/2018/04/14/just-3-steps-adding-netlify-cms-to-existing-github-pages-site-within-10-minutes.html)
    2. If the forked repository is for an organization, [request (or grant) organization approval for the OAuth app](https://help.github.com/en/github/setting-up-and-managing-your-github-user-account/requesting-organization-approval-for-oauth-apps).
    3. Edit `admin/config.yml` to add 
       ```
       {% elsif site.github.owner_name == "<your user or organization>" %}
       site_domain: <your netlify site name>.netlify.com
       ```
       above the line that reads 
       ```
       {% comment %}Add additional elsif clauses for other GitHub users/orgs and and their Netlify site domains above this line{% endcomment %}
       ```

# Troubleshooting

If a site fails to update because Netlify checks fail, someone may need to log in to the team's Netlify account and to do something like update the update the server image that is being used. This is extremely rare but if it needs to be done, they will need to sign in to [netlify.com](https://www.netlify.com) using the GitHub account associated with `deepbluerobotics@gmail.com`. The lead mentors have the password needed to access that GitHub account.

