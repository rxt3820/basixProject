<?php
    include('header.html');
?>

<!DOCTYPE html>

<html>

<head>
    <title>basiX W UniX</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" href="mainUpdated.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="learn.css">
    <script src="main.js"></script>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="wrapper">
        <!-- have a black background-->
        <br>
        <br>
        <br>
        <h1>Getting Started - Mac</h1>

        <div class="boxes">
            <p>
                Unix/Linux is already accessible to Mac users by using the terminal.
                You can find the terminal by going to your utilities folder then selecting the terminal. When you open your terminal you will first see the last login on your account as well as the prompt which ends in a dollar sign($).
            </p>

            <br>

            <input type="checkbox" id="box-1">
            <label for="box-1">When you open your terminal you will first see the last login on your account as well as the prompt which ends in a dollar sign($). Then you're all set
            </label>



        </div>


        <br><br><br>
        <h1> Getting Started - Windows</h1>
        <div class="boxes">
            <p>
                Unix/Linux is a bit harder to set up on windows but try following these steps or watch the video that is linked below
            </p>

            <br>

            <input type="checkbox" id="box-2">
            <label for="box-2">Go to settings in Windows 10. On the left, you will see for developers click on that button.
            </label>

            <input type="checkbox" id="box-3">
            <label for="box-3">Now click the button "Developer mode", this will take a few mins to install.</label>

            <input type="checkbox" id="box-4">
            <label for="box-4">Then open your control panel and click on programs and click turn windows features on or off.
            </label>

            <input type="checkbox" id="box-5">
            <label for="box-5">Scroll down to Windows Subsystem for Linux and check the box and hit okay. Once this is down you will have to click restart to restart your computer with the new software.</label>

            <input type="checkbox" id="box-6">
            <label for="box-6">Once your computer is restarted then search for bash on your computer. Your command terminal will display a message that you need an installed distribution, so open the windows store.</label>

            <input type="checkbox" id="box-7">
            <label for="box-7">In the store search for ubuntu and click on ubuntu and install it. Once it is installed click the launch button.
            </label>

            <input type="checkbox" id="box-8">
            <label for="box-8">It will ask you to create a new Unix username so type that in and enter a custom password and then you're done! <br /> Now you're ready to continue to more tutorials have fun!
            </label>
        </div>

        <br><br><br>
        <h1> Intro to Commands </h1>
        <div class="boxes">
            <p>
                A command is an order provided by a user asking a machine to do something, such as running a single program or a series of related programs. Commands are usually triggered by accessing them on the command line (i.e. the all-text screen mode) and then hitting the enter key, which sends them to the container. You can access the command line by opening the terminal application you downloaded previously.
            </p>

            <br>
            <dl>
                <dt>PWD</dt>
                <dd> Pwd stands for the Print Working Directory. It prints the route of the working directory, beginning with the root file.</dd>
                <dd><img class="command" src="assets/commands-11.png"></dd>

                <br>

                <dt>cd</dt>
                <dd>The cd command in Linux is known as the change directory command. It is used to modify the current working directory.</dd>
                <dd><img class="command" src="assets/commands-12.png"></dd>
                <br>

                <dt>cd/</dt>
                <dd>This command is used to change the working directory to the root directory. The root directory is the first directory in the hierarchy of your filesystem.</dd>
                <dd><img class="command" src="assets/commands-13.png"></dd>

                <br>

                <dt>cd~</dt>
                <dd>This command is used to change the directory to your home directory.</dd>
                <dd><img class="command" src="assets/commands-14.png"></dd>
                <br>

                <dt>cd..</dt>
                <dd>This command is used to move to the parent directory of the current directory, or one level up from the current directory. ".." is the parent directory.
                </dd>
                <dd><img class="command" src="assets/commands-15.png"></dd>
                <br>

                <dt>Options For Different Commands</dt>
                <dd>Options modify the way in which a command works. Options are often single letters prefixed with a dash (-) and set off by any number of spaces or tabs. Multiple options in one command line can be set off individually (like -a -b), or, in some cases, you can combine them after a single dash (like -ab).</dd>

                <br>

                <dt>ls</dt>
                <dd>This command is used to list out the information about the folder or directory data within the file system.</dd>
                <dd><img class="command" src="assets/commands-16.png"></dd>

                <br>

                <dt>ls -la</dt>
                <dd>This command is used to list out the information about the folder including the size, modified date and time, file or folder name and owner of the file and its permissions.</dd>
                <dd><img class="command" src="assets/commands-18.png"></dd>

                <br>

                <dt>rm</dt>
                <dd>This command deletes a file.</dd>
                <dd><img class="command" src="assets/commands-20.png"></dd>

                <br>

                <dt>mv</dt>
                <dd>This command renames files can also move files and rename a directory</dd>
                <dd><img class="command" src="assets/commands-21.png"></dd>

                <br>

                <dt>echo</dt>
                <dd>Is a command used to display a line of text that is passed as an argument in the command line. Using (\b) removes the spaces between the words, but you must use (-e) right after echo so that the OS knows that it has to interpret the backslashes. For example, <b>“echo -e “Hello \bWorld” prints “HelloWorld”</b>. Using (\n) creates a new line, for example.<b>“echo -e “Hello \nWorld”</b> prints <b>“Hello world”</b>
                </dd>
                <dd><img class="command" src="assets/commands-19.png"></dd>

                <br>

                <dt>mkdir</dt>
                <dd>This command is used to make a new directory in the filesystem
                    according to its argument. If a file path is given, the new directory will be placed at
                    the end. Otherwise, it will create a new directory in the current working directory
                    with the name given.</dd>
                <dd><img class="command" src="assets/commands-22.png"></dd>

            </dl>
        </div>

        <br><br><br>
        <h1> File Manipulation </h1>
        <div class="boxes">

            <dl>
                <dt>Touch</dt>
                <dd>Creates or modifies files, updates the timestamp of the file.</dd>
                <dd><img class="command" src="assets/commands-02.png"></dd>
                <br>

                <dt>Nano</dt>
                <dd>Makes the terminal act as a command-line text editor.</dd>
                <dd><img class="command" src="assets/commands-03.png"></dd>

                <br>

                <dt>Chmod</dt>
                <dd>Changes the permission of file (read, write, execute); permissions can be set through symbolic and numeric notation.</dd>
                <dd><img class="command" src="assets/commands-04.png"></dd>
            </dl>
        </div>

        <br><br><br>
        <h1> More Commands </h1>
        <div class="boxes">

            <dl>
                <dt>clear</dt>
                <dd>Clears the window of all text in order to make it easier to read the results of your commands.</dd>
                <dd><img class="command" src="assets/commands-05.png"></dd>

                <br>

                <dt>history</dt>
                <dd>Shows the previous commands that you typed</dd>
                <dd><img class="command" src="assets/commands-06.png"></dd>

                <br>

                <dt>date</dt>
                <dd>shows to current date and time
                    <dd />
                <dd>- (-u) represent the date/time in GMT/UTC
                </dd>
                <dd>- --date =“string” (top help represent past dates)
                </dd>
                <dd><img class="command" src="assets/commands-07.png"></dd>

                <br>

                <dt>say</dt>
                <dd>Converts the text that you have typed to audible speech </dd>
                <dd>- -v tp help specify the voice to say the command
                </dd>
                <dd><img class="command" src="assets/commands-08.png"></dd>

                <br>

                <dt>whoami</dt>
                <dd>Shows the user name of the current user </dd>
                <dd><img class="command" src="assets/commands-09.png"></dd>

                <br>

                <dt>Man (command)</dt>
                <dd>View the manual pages (or view detailed information) on a specific command</dd>
                <dd>For example type "man ls" and it will show you a manual for how to use the command</dd>
                <dd>- Press q to quit</dd>
                <dd><img class="command" src="assets/commands-10.png"></dd>

            </dl>

        </div>
    </div>
</body>

</html>
<?php
    include('footer.html');
?>
