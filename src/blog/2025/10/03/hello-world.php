---
post-title: Hello World
post-author-name: David Hunter
post-date: 2025-10-03
post-time: 17:25
post-excerpt: A getting started tutorial from just an idea.
layout: src/_includes/layout-2025-09.php
staticphp_nav_item: blog
---

<p>The famous words every software developer knows about. it's now time to look at these words again in the context of StaticPHP.</p>

<p>In this blog post, we will look at how to get started with StaticPHP, from the moment you get an idea, all the way up to the point you are looking at the finished project.</p>

<h2>Step 1: Gather Your Thoughts</h2>

<p>This part may seem obvious to some, but not so obvious to others, but you can't really go much further with the project until you know what it is, so take some time to think about what you want to use StaticPHP for.</p>

<p>For the purposes of this blog post, let's assume your idea is to make a personal homepage all about you.</p>

<p>Grab a piece of paper, or open a note-taking piece of software, such as Notepad, and start jotting down what you want to put on this new personal homepage.</p>

<pre><code>
    <p style="border-bottom: 1px solid #888; font-size: 1.1rem;">My personal homepage using StaticPHP.</p><p style="border-bottom: 1px solid #888;">Name: John Smith</p><p style="border-bottom: 1px solid #888;">Occupation: Unemployed Internet Surfer</p><p style="border-bottom: 1px solid #888;">About Me: I am an unemployed internet surfer who spends his time browsing the internet and checking out all the cool stuff online.</p><p style="border-bottom: 1px solid #888;">Contact: john.smith@email.tld</p>
</code></pre>

<p>Now that you have your notes, we can proceed to the next step.</p>

<h2>Step Two: Downloading and Setting Up StaticPHP</h2>

<p>Firstly, create a folder/directory somewhere where you want to save all the project files to, such as your desktop. For this post, we will call ours <code>personal-homepage</code>.</p>

<p>There are multiple ways to download and setup StaticPHP. You can download the actual StaticPHP file itself and run it using command line positional or named arguments, which also lets you use it completely offline, or you can download the StaticPHP launcher which allows you to set your own configuration and makes running it later much easier, and it can help keep you up to date with the latest improvements to StaticPHP, and alternatively, you can use your own launcher if you don't like the bundled one.</p>

<p>For this blog post, and to keep things as simple as possible, we will use the StaticPHP Launcher. Download it from <a href="https://weburl.net/github/staticphp/StaticPHP-Launcher" target="_blank">GitHub</a> or <a href="https://weburl.net/gitlab/staticphp/StaticPHP-Launcher" target="_blank">GitLab</a> and save it to your project folder/directory.</p>

<p>Open the file in your favourite text/code editor and review it. You will see it is pretty easy to customise. Almost everything about StaticPHP can be customised in some way, so you can really have things your way.</p>

<p>Create a folder/directory for your input and output files to go, if you haven't changed the default values, these will be called <code>src</code> and <code>public</code> respectively.</p>

<p>Now, you are pretty much ready to start making your website.</p>

<h2>Step Three: Your Website Files</h2>

<p>We will use StaticPHP's Base Layouts feature to keep the design of our site consistent across all pages. We will only really be creating a couple of pages now, but it is good to set this up now to save future you time later. This file is a special file, so we want to make sure StaticPHP ignores it and doesn't process it as a normal file, so let's create a folder/directory for ignored files, by default it is called <code>_includes</code>, but you can change this in the launcher file.</p>

<p>Inside <code>_includes</code>, create a file that will contain your website's layout, this can be a PHP or HTML file, but we will call ours <code>layout.html</code>. Edit the file and put in simple boilerplate HTML code for your site. The content placeholder, by default it is <code>{{ content }}</code>, is where each page's content will be placed. Even though <code>{{ content }}</code> is the default, it is always a good idea to redefine your choice in case the default changes in the future.</p>

<p><b>Example File: </b><code>src -&gt; _includes -&gt; layout.html</code></p>

<pre><code><?php echo htmlentities( '
---
content_placeholder: {{ content }}
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>John Smith - Personal Homepage</title>
    </head>

    <body>
        <h1>John Smith</h1>
        <p><i>Personal Homepage</i></p>
        <hr>
        {{ content }}
        <hr>
        <p>Copyright &copy; John Smith.</p>
    </body>
</html>' ); ?></code></pre>

<p>The part at the very top of that example is called <code>MetaData</code>, a special syntax that StaticPHP uses, mostly similar to variables in programming languages where you can set a key to a value, but in the above example, the <code>content_placeholder</code> key is special and tells StaticPHP to use the value as the content placeholder you wish to use, which must match the one in the layout content.</p>

<p>Now for the main event, the actual homepage itself. Go back to your input folder/directory (e.g. <code>src</code>) and create a file called <code>index.html</code>. Edit it and put in code similar to this.</p>

<p><b>Example File: </b><code>src -&gt; index.html</code></p>

<pre><code><?php echo htmlentities( '
---
layout: src/_includes/layout.html
---

<h2>My personal homepage using StaticPHP.</h2>

<p><b>Name:</b> John Smith</p>

<p><b>Occupation:</b> Unemployed Internet Surfer</p>

<p><b>About Me:</b> I am an unemployed internet surfer who spends his time browsing the internet and checking out all the cool stuff online.</p>

<p><b>Contact:</b> john.smith@email.tld</p>
' ); ?></code></pre>

<p>The very top of the example file, you will see more MetaData. This time, the <code>layout</code> key is another special key that tells StaticPHP you want to use a layout file, and to use its value as the path to the layout file you wish to use.</p>

<p>StaticPHP will take the layout file, and place this content inside it, right where you told it to, making layouts very easy for static websites.</p>

<p>You probably noticed there isn't really much content in the examples above. I did this really just to keep things simple for your first StaticPHP project. You can stick to the examples, or put in your own code, but the concepts shown here will be important in future projects if you decide to continue using StaticPHP for your static website projects.</p>

<h2>Step Four: Running StaticPHP and Building Your Static Site</h2>

<p>How you run StaticPHP will depend on whether you used the provided launcher or your own launcher or command line arguments, but since we chose the launcher for this tutorial, we will focus on that method, because it is the easiest to do, and recommended when you're just starting out.</p>

<p>Open up a terminal window in your project folder/directory. Enter the run command below and execute it. You will need PHP installed on the current machine in order to use this command, installation of which is beyond the scope of this blog post.</p>

<p><code>php StaticPHP-Launcher.php</code></p>

<p>StaticPHP should now run and give you a full log output. Don't be scared by this, it is normal. For your first project, you can probably ignore it entirely unless you see obvious errors.</p>

<p>Now go into your output folder/directory (e.g. <code>public</code>), and you should now see a file in there called <code>index.html</code>, and nothing else. Open that file in a web browser and you will see its output.</p>

<h2>Step Five: Viewing Your Website Locally</h2>

<p>Opening the file like you did at the end of the last step may work in some cases but not work in others. This is because of links and assets not aligning with the relative path to the file, so for this, and to better simulate it as if it was online, we will use PHP's built-in web server.</p>

<p>PHP has a fantastic built-in web server that is a quick and easy way to run a local web server with PHP for testing out your code, and since we have PHP installed locally, using it saves us having to install actual server software. You can of course use whichever method you want, but for this post, let's fire up PHP's built-in web server.</p>

<p>In a terminal window, change directory to your output folder/directory (e.g. <code>cd public</code>). Now run the following command.</p>

<p><code>php -S localhost:8080</code></p>

<p>In your web browser, go to <code>http://localhost:8080</code> and your new website should now load.</p>

<h2>Conclusion</h2>

<p>Well done. You have now successfully made your first website using StaticPHP, and it's beautiful, because you made it, and you matter.</p>

<p>I would just like to take a moment to thank you so much for giving StaticPHP a try. It means so much to me that you are creating with StaticPHP.</p>

<p>Enjoy your new site, and I hope the rest of your day is great for you, because you're worth it.</p>
