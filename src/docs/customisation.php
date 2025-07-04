---
layout: src/_includes/docs-layout.php
page_title: Customisation
docs_nav_item: customisation
---

<h2>Customisation</h2>

<p>StaticPHP is designed to be powerful and versatile right out of the box, catering to a wide range of needs. However, there may be times when you need to customise StaticPHP to better fit the specific requirements of your project.</p>

<p>StaticPHP offers many customisable options that can be defined in the build configuration, and some can be overridden on a per-file basis. Let's explore these options.</p>

<h3>Input Directory</h3>

<p>The input directory is where you put all your source files. By default, this is a folder named <code>src</code> located relative to StaticPHP. You can change this to any directory you prefer.</p>

<p>To specify your input directory, set <code>source_dir_path</code> in your build configuration to the path where your source files are located.</p>

<h3>Output Directory</h3>

<p>The output directory is where StaticPHP places the generated output files after processing. By default, this is a folder named <code>public</code> located relative to StaticPHP. You can change this to any directory you prefer.</p>

<p>To specify your output directory, set <code>output_dir_path</code> in your build configuration to the path where you want StaticPHP to put your generated output files.</p>

<h3>Ignoring Files</h3>

<p>Sometimes you have files used only within your source files, such as configuration and include files, that you don't want processed as individual pages. You can tell StaticPHP to ignore these by placing them inside a folder and setting the name of that folder as a path part to ignore under `paths_to_ignore` in your build configuration.</p>

<p>If using the command line option, you can specify one path part to ignore. If using the included launcher script or a custom launcher script, you can set this as an array of path parts.</p>

<p>A general recommendation is to use a folder called <code>_includes</code> and add it as the path to ignore. This way, any files inside <code>_includes</code> will be ignored as individual files but still processed as intended, such as through PHP includes.</p>

<h3>Friendly URLs</h3>

<p>Enhance user experience and improve SEO by enabling StaticPHP's Friendly URLs feature. This feature creates URLs like <code>domain.tld/page</code> instead of <code>domain.tld/page.html</code>.</p>

<p>Set <code>friendly_urls</code> in your build configuration to <code>true</code> to enable or <code>false</code> to disable Friendly URLs.</p>

<h3>MetaData Delimiter</h3>

<p>By default, StaticPHP uses a triple hyphen delimiter (<code>---</code>) for MetaData, but you can change this in your build configuration under <code>metadata_delimiter</code>.</p>

<p>For more details, refer to the <a href="/docs/metadata">MetaData</a> guide.</p>

<h3>Code Minification</h3>

<p>StaticPHP inherently speeds up your website by generating static files, but you can further increase speed by reducing the size of the files downloaded by users.</p>

<p>The code minification feature removes unnecessary spacing from your generated files, making them as small as possible while preserving content integrity. Your source files remain unaffected.</p>

<p>You can choose which types of files to minify (<code>HTML</code>, <code>CSS</code>, <code>JS</code>) in your build configuration, by setting <code>minify_html</code>, <code>minify_css</code>, and <code>minify_js</code> to true or false.</p>

<p><strong>JavaScript Minification</strong> is currently <strong>Disabled</strong> due to a bug in the minification process. It will be re-enabled once the bug has been fixed.</p>

<p><b>HTML Tag Preservation:</b> Sometimes you may want certain tags, like <code>&lt;pre&gt;</code>, to remain unminified so that things like code snippets remain intact. Simply set <code>minify_html_tags_to_preserve</code> to an array of tag names in your StaticPHP configuration.</p>

<hr>

<p>For more information on customising StaticPHP, be sure to check out the <a href="/docs/getting-started">Getting Started</a> guide. For options available to be overridden on a per-file basis, refer to the <a href="/docs/metadata">MetaData</a> guide.</p>
