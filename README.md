Munin opcache plugins
===============

Credits
-----------

The first plugin that actually worked was made by [Daniel Lo Nigro](http://dan.cx/), but it lacked a fundamental feature which was the ability to see how much wasted memory OPCache was using at the moment. This is what I started to improve. Later on, I also made it possible to keep an eye on the restarts.

How to install
-----------

* Copy <code>munin_opcache.php</code> to your localhost root. Ideally, it should be accesible if you go to <code>http://localhost/munin_opcache.php</code>.
* If you choose another URL, don't forget to configure the plugins. This can be done on the first few lines of each plugin, or you can use environment variable manipulation in your main <code>munin.conf</code> file.
* Copy the plugins to the plugins directory. On a CentOS system, this is <code>/usr/share/munin/plugins/</code>. Don't forget to make the symlink in <code>/etc/munin/plugins/</code>.
* Restart your munin node in order to let it know about the new plugin(s): <code>/etc/init.d/munin-node restart</code>. On other systems, <code>service munin-node restart</code> can also do the job. 

Within a lapse of a few minutes, you should start seeing the graphs on your munin server. Enjoy!

Version History
-------------

* 0.0.1: 
	* Initial release
	* Very basic plotting. Code is not really tested
	* There is a big chance that the graphs are not correctly drawn.
* 0.1.0:
	* Corrections to graph type
	* Documentation (this file)
	* Instructions on how to install this
	* Created a script that I can use to easily put the files where needed
	* Not really tested yet, but getting closer
* 0.2.0:
	* Moved file locations
	* Added OPC.php to repo. [Credits](https://gist.github.com/n1xim/6377328)
