<html>
    <head>
        <meta NAME="Author" Content="Andy Lester">
        <title>ack 1.96 -- better than grep, a source code search tool for programmers</title>
        <style type="text/css">
            <!--
            div.bill pre {
                font-weight : bold;
                font-size : 25pt;
            }
            body {
                margin-left: 100px;
                margin-right: 100px;
            }
            -->
        </style>
    </head>
    <body bgcolor="white">
        <div class="bill" align="center">
            <table border="0" cellpadding="10" cellspacing="10">
                <tr>
                    <td>
<pre>
_   /|
\'o.O'
=(___)=
   U    ack!
</pre>
                    </td>
                </tr>
            </table>
        </div>


        <p>
        <?php include "ack-lists.php" ?>
        <b>ack</b> is a tool like <i>grep</i>, designed for programmers with large trees of
        heterogeneous source code.
        </p>

        <p>
        ack is written purely in Perl, and takes advantage of the power of Perl's
        regular expressions.
        </p>

        <h2>Latest version of ack: 1.96, September 18, 2011</h2>

        <p>
        Read the <a href="Changes">Changelog</a>
        </p>

        <h2>How to install ack</h2>

        <p>
        It can be installed any number of ways:
        </p>
        <ul>
            <li>
            <b>Install the CPAN module <a href="http://search.cpan.org/dist/ack">App::Ack</a></b>.
            If you are a Perl user already, this is the way to go.
            </li>
            <li>
            <b>Download the
                <a href="http://betterthangrep.com/ack-standalone">standalone version</a></b> of ack
            that requires no modules beyond what's in core Perl, and putting it in your path.
            If you don't want to mess with setting up Perl's CPAN shell, this is easiest.
            <blockquote>
                <code>
                    curl http://betterthangrep.com/ack-standalone &gt; ~/bin/ack &amp;&amp; chmod 0755 !#:3
                </code>
            </blockquote>
            </li>
            <li>Install the <b>Macport</b>: <a href="http://trac.macports.org/browser/trunk/dports/perl/p5-app-ack/Portfile">http://trac.macports.org/browser/trunk/dports/perl/p5-app-ack/Portfile</a></li>
            <li>Install the <b>Debian package</b>: <a href="http://packages.debian.org/search?keywords=ack-grep">ack-grep</a>
            <ul>
                <li>To install ack-grep as "ack" instead of "ack-grep", use this command:<br>
                <tt>  sudo dpkg-divert  --local --divert /usr/bin/ack --rename --add /usr/bin/ack-grep</tt></li>
            </ul>
            </li>
            <li>Install the <b>Ubuntu package</b>: ack-grep</li>
            <li>Install the <b>Fedora package</b>: ack</li>
            <li>Install the <b>Gentoo package</b>: sys-apps/ack</li>
            <li>Install the <b>Arch package</b>: community/ack</li>
        </ul>

        <h2>AckMate for Textmate users</h2>
        <p>
        Users of TextMate, the programmer's editor for the Mac, can use the AckMate plugin by Trevor Squires:
        </p>
        <blockquote>
            TextMate users know just how slow its "Find in Project"
            can be with large source trees. That's why you need
            "ack-in-project" &mdash; a TextMate bundle that uses
            the super-speedy "ack" tool to search your code
            FAST. It gives you beautiful, clickable results just
            as fast as "ack" can find them. Check it out at:
            <a href="https://github.com/protocool/ackmate">https://github.com/protocool/ackmate</a>
        </blockquote>

        <h2>Testimonials about ack</h2>

        <p>
        "Whoa, this is *so* much better than grep it's not even funny."
        -- <a href="http://jacobian.org/">Jacob Kaplan-Moss</a>, creator of <a href="http://www.djangoproject.com/">Django</a>.
        </p>


        <p>
        "Thanks for creating ack and sharing it with the world.  It
        makes my days just a little more pleasant.  I'm glad to have it
        in my toolbox.  That installation is as simple as downloading the
        standalone version and chmodding is a nice touch."
        -- <a href="http://www.highprogrammer.com/alan/">Alan De Smet</a>
        </p>

        <p>
        "I came across ack today, and now grep is sleeping outside. It's very
        much like grep, except it assumes all the little things that you always
        wanted grep to remember, but that it never did. It actually left the
        light on for you, and put the toilet seat down."
        -- <a href="http://assistedsilicon.blogspot.com/2008/09/ack-grep-but-better.html">Samuel Huckins</a>
        </p>

        <p>
        "ack is the best tool I have added to my toolbox in the past year, hands down."
        -- <a href="http://billmill.org/">Bill Mill</a> on <a href="http://www.reddit.com/info/6odl4/comments/">reddit</a>
        </p>

        <p>
        "I use it all the time and I can't imagine how I managed with only 
        grep."
        -- <a href="http://marnanel.org/">Thomas Thurman</a>
        </p>

        <p>
        "This has been replacing a Rube Goldberg mess of <tt>find/grep/xargs</tt>
        that I've been using to search source files in a fairly large codebase."
        -- <a href="http://www.anomaly.org/wade/">G. Wade Johnson</a>
        </p>

        <p>
        "You had me at <tt>--thpppt</tt>."
        -- John Gruber, <a href="http://daringfireball.net/linked/2007/november#tue-27-ack">Daring Fireball</a>

        </p>
        <p>
        "Grepping of SVN repositories was driving me crazy until I found ack. It
        fixes all of my grep annoyances and adds features I didn't even know I
        wanted." -- <a href="http://www.prescod.net/">Paul Prescod</a>

        <p>
        "I added ack standalone to our internal devtools project at work. People
        are all over it." -- <a href="http://www.multiply.org/">Jason Gessner</a>

        <p>
        "I just wanted to send you my praise for this wonderful little
        application.  It's in my toolbox now and after one day of use has proven
        itself invaluable." -- <a href="http://www.just-another.net/">Benjamin W. Smith</a>

        <p>
        "ack has replaced grep for me for 90% of what I used it for.
        Obsoleted most of my 'grep is crippled' wrapper scripts, too."
        -- Randall Hansen

        <p>
        "ack's powerful search facilities are an invaluable tool for searching
        large repositories like <a href="http://parrot.org/">Parrot</a>. The
        ability to control the search domain by filetype--and to do so
        independent of platform--has made one-liners out of many complex
        queries previously done with custom scripts. Parrot developers
        are hooked on ack."
        -- <a href="http://www.rakudoconsulting.com/">Jerry Gay</a>
        </p>

        <p>
        "That thing is awesome. People see me using it and ask what the heck it is."
        -- Andrew Moore
        </p>

        <h2>Top 10 reasons to use ack instead of grep.</h2>
        <ol>
            <li>It's <b>blazingly fast</b> because it only searches the stuff you want searched.</li>
            <li>ack is pure Perl, so it <b>runs on Windows</b> just fine. It has <b>no dependencies</b> other than Perl 5.</li>
            <li>The <a href="http://betterthangrep.com/ack-standalone">standalone
                version</a> uses no non-standard modules, so you can put it in your
            <tt>~/bin</tt> without fear.</li>
            <li>
            Searches recursively through directories by default, while ignoring
            <tt>.svn</tt>, <tt>CVS</tt> and other VCS directories.
            <ul>
                <li>
                Which would you rather type?<br>
                <tt>$ grep pattern $(find . -type f | grep -v '\.svn')</tt><br>
                <tt>$ ack pattern</tt>
                </li>
            </ul>
            </li>
            <li>ack <b>ignores most of the crap you don't want to search</b>
            <ul>
                <li>VCS directories
                <li><i>blib</i>, the Perl build directory
                <li>backup files like <i>foo~</i> and <i>#foo#</i>
                <li>binary files, core dumps, etc
            </ul>
            </li>
            <li>Ignoring .svn directories means that <b>ack is faster than grep</b> for searching through trees.</li>
            <li><b>Lets you specify file types to search</b>, as in <tt>--perl</tt> or <tt>--nohtml</tt>.
            <ul>
                <li>Which would you rather type?<br>
                <tt>$ grep pattern $(find . -name '*.pl' -or -name '*.pm' -or  -name '*.pod' | grep -v .svn)</tt><br>
                <tt>$ ack --perl pattern</tt>
                </li>
            </ul>
            Note that ack's <tt>--perl</tt> also checks the shebang lines of
            files without suffixes, which the find command will not.
            <li>File-filtering capabilities usable without searching with <tt>ack -f</tt>.  This lets you <b>create lists of files of a given type</b>.<br>
            <tt>$ ack -f --perl &gt; all-perl-files</tt>
            <li>Nicer and more flexible <b>color highlighting</b> of search results.</li>
            <li>Uses <b>real Perl regular expressions</b>, not a GNU subset.
            <li>Allows you to specify output using Perl's special variables.  To find all <tt>#include</tt> files in C programs:
            <ul>
                <li><tt>ack --cc '#include\s+&lt;(.*)&gt;' --output '$1' -h</tt>
            </ul>
            <li>
            Many command-line switches are the same as in GNU grep, so you don't have to relearn two sets:<br>
            <tt>-w</tt> does word-only searching<br>
            <tt>-c</tt> shows counts per file of matches<br>
            <tt>-l</tt> gives the filename instead of matching lines<br>
            etc.
            </li>
            <li><b>Command name is 25% fewer characters to type!</b>  Save days of free-time! Heck, it's 50% shorter compared to <tt>grep -r</tt>.</li>
        </ol>
        <hr>
        <h2>ack's command flags</h2>

<pre>
$ ack --help
<?php include "ack-help.txt" ?>
</pre>
        <hr>
        <h2>File types that ack understands</h2>
<pre>
$ ack --help-types
<?php include "ack-help-types.txt" ?>
</pre>


<!-- Google tracking, must be just before close of body tag -->
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-631706-7']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script');
ga.src = ('https:' == document.location.protocol ? 'https://ssl' :
'http://www') + '.google-analytics.com/ga.js';
ga.setAttribute('async', 'true');
document.documentElement.firstChild.appendChild(ga);
})();
</script>
    </body>
</html>
