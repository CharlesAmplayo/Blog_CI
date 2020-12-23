<h3>Installation Guide for Windows 10</h3>

<form>
    <div>
        *This guide is based on Divya Singh's post:
        Source: <a href=" https://www.datasciencecentral.com/profiles/blogs/how-to-install-and-run-hadoop-on-windows-for-beginners">Link</a>
    </div>
    <br>
    <div>
        <h4>
        1.	Prerequisite is having a Java 1.8 in your system. To check, open cmd and enter command “java -version”. If it shows nothing, then install one from <a href="https://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html">Oracle</a>. Remember the path of installation, or make a Java folder on your local disk to install it there.
        <center>
        <img src = "assets/hadoop pics/java.png">
        </center>
        <br>
        2.	Download <a href="https://hadoop.apache.org/releases.html">Hadoop</a> Pick the earlier versions since they are much more stable. In my case, I installed version 3.1.0. Then extract to any location that is much easier. Like mine on Desktop.
        <center>
        <img src = "assets/hadoop pics/hadoop.png">
        </center>
        <br>
        3. Environment Variables<br>
        A.  Setup Environment Variables found on the Settings app
            
            <div class="row">   
                <div class="column">
                    <img src = "assets/hadoop pics/settings.png">
                </div>
                <div class="column">
                    <img src = "assets/hadoop pics/environment.png">
                </div>
            </div>
            
        <br>
        B. Create new user variables for Java and Hadoop. You can name the variables as is, for the value, put the bin folder directory for the Java and Hadoop
        <center>
        <img src = "assets/hadoop pics/hadoop variable.png">
        <img src = "assets/hadoop pics/java variable.png">
        </center>
        <br>

        C. Put the bin directory of both Java and Hadoop on Path of the System Variables
        <center>
        <img src = "assets/hadoop pics/PATH variable.png">
        </center>
        <br>

        4. Configuration<br>
        A. We configure some files on the etc folder of Hadoop. The files are highlighted below.
        <center>
        <img src = "assets/hadoop pics/etc folder.png">
        </center>
        <br>

        B. For Core-site and Mapred-site files
        <div>
            <center>
            <img src = "assets/hadoop pics/core-site.png">
            <img src = "assets/hadoop pics/mapred.png">
            </center>
        </div>
        <br>
    
        C. Create a Data folder in Hadoop folder with datanode and namenode as subfolders for the hdsf-site file. Edit the hsdf-site file.
        <div>
        <center>
        <img src = "assets/hadoop pics/data folder.png">
        <img src = "assets/hadoop pics/nodes.png">
        <img src = "assets/hadoop pics/hdfs.png">
        </center>
        </div>
        <br>

        D. For the yarn-site file
        <center>
        <img src = "assets/hadoop pics/yarn.png">
        </center>
        <br>

        E. For the Hadoop-env.cmd file. We just put the Java directory
        <center>
        <img src = "assets/hadoop pics/Hadoop Env.png">
        </center>
        <br>

        5. Since the default download of Hadoop does not come with Windows OS specific files, we just override the bin folder with the bin folder provided by this github <a href="https://github.com/s911415/apache-hadoop-3.1.0-winutils">link.</a>
        You can just delete the old bin folder, but I just decided to rename it as old_bin
        <center>
        <img src = "assets/hadoop pics/github.png">
        <img src = "assets/hadoop pics/bin.png">
        </center>
        <br>
        <br>
        And it’s done. To check if you successfully installed Hadoop, go to cmd and enter command “hadoop version”.
        <center>
        <img src = "assets/hadoop pics/Check Hadoop.png">
        </center>
    </div>
</form>