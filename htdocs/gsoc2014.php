<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="description" content="google summer of code 2014 ideas" />
  <meta name="keywords" content="Cppcheck, google summer of code" />
  <title>google summer of code 2014 ideas</title>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Orbitron&amp;text=Cppcheck" />
  <link rel="stylesheet" type="text/css" href="/site/css/pack.css" />
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
</head>
<body>
<div id="header">
  <div class="wrap">
    <h1><a href="/">Cppcheck</a></h1>
    <p>A tool for static C/C++ code analysis</p>
  </div> <!-- .wrap -->
</div> <!-- #header -->
<div id="tabs">
  <div class="wrap">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="http://sourceforge.net/apps/mediawiki/cppcheck/">Wiki</a></li>
      <li><a href="http://sourceforge.net/apps/phpbb/cppcheck/">Forum</a></li>
      <li><a href="http://sourceforge.net/apps/trac/cppcheck/">Issues</a></li>
      <li><a href="/devinfo/" title="Developer Information">Developer Info</a></li>
      <li><a href="/demo/">Online Demo</a></li>
      <li><a href="http://sourceforge.net/projects/cppcheck/">Project page</a></li>
    </ul>
  </div> <!-- .wrap -->
</div> <!-- #tabs -->
<div id="content">
  <div class="wrap">

  <h2>Overview</h2>

  <p>
    <ol>
      <li>Core Cppcheck
        <ol>
          <li>Add 1 new checker (C++)</li>
          <li>Abstract interpretation of loops (C++)</li>
          <li>Check for unused functions when -j is used (C++)</li>
        </ol></li>
      <li>Configurations
        <ol>
          <li>Add a configuration (XML)</li>
          <li>Auto generate configuration (C++ / scripting)
          <li>GUI for editing configurations (C++,Qt)</li>
        </ol></li>
      <li>Distributed computing
        <ol>
          <li>Distributed computing (Network programming, Python / C++)</li>
        </ol></li>
    </ul>
  </p>

  <h2>1. Core Cppcheck</h2>

  <p>
    <strong>Project 1.1</strong><br>
    <strong>Name:</strong> Add 1 new checker<br>
    <strong>Skills required:</strong> C++<br>
    <strong>Description:</strong> There are several tickets in our issue tracker that has ideas for new checkers.
    The subtasks will be: pick a ticket to fix, write test cases, implement new checker, test it against various
    projects.
  </p>

  <p>
    <strong>Project 1.2</strong><br>
    <strong>Name:</strong> Abstract interpretation of loops<br>
    <strong>Skills required:</strong> C++<br>
    <strong>Description:</strong> You will write an C/C++ expression interpreter that uses the Cppcheck syntax
    tree to interpret the expressions in loops. When there are unknown operands (variables with unknown value,
    etc) the interpreter shall bailout. You will interpret the loop expressions until : the loop finish , or
    there is a timeout , or the variables are unchanged. During the interpretation, the variable values will be
    recorded and saved as ValueFlow values. You can read an overview of the Cppcheck syntax tree and ValueFlow
    analysis in the <a href="http://sourceforge.net/projects/cppcheck/files/Articles/cppcheck-design.pdf">cppcheck
    design</a> document.
  </p>

  <p>
    <strong>Project 1.3</strong><br>
    <strong>Name:</strong> Check for unused functions when -j is used<br>
    <strong>Skills required:</strong> C++, threads<br>
    <strong>Description:</strong> Currently the check for unused functions only works when the analysis is
    single-threaded. When multithreaded analysis is done the check is disabled. Currently the check saves function
    usage information in a container. The same container is used for all files. This should be refactored. For each
    file there should be a separate container for the function usage information.
  </p>

  <h2>2. Configurations</h2>

  <p>
    <strong>Project 2.1</strong><br>
    <strong>Name:</strong> Add a configuration<br>
    <strong>Skills required:</strong> C/C++ (not much), XML<br>
    <strong>Description:</strong> More configuration files are needed for various libraries. Subtasks: choose
    a popular library. Analyse the library functions and read API documentation. Write proper configuration
    file for Cppcheck. Test the configuration.
  </p>

  <p>
    <strong>Project 2.2</strong><br>
    <strong>Name:</strong> Autogenerated configurations<br>
    <strong>Skills required:</strong> C++ / scripting<br>
    <strong>Description:</strong> Auto generate configuration from headers. To parse the headers, you can for
    instance do this yourself (python script/c++/..) or you can modify cppcheck. All function names will be
    extracted, and you will also determine what function arguments are passed by value.
  </p>

  <p>
    <strong>Project 2.3</strong><br>
    <strong>Name:</strong> GUI for editing configurations<br>
    <strong>Skills required:</strong> C++, Qt<br>
    <strong>Description:</strong> A graphical user interface for editing configurations would be nice. This can
    be developed as a standalone program or integrated in the cppcheck-gui program. However in the end the plan
    is that it will be merged into the cppcheck-gui program.
  </p>

  <h2>3. Distributed computing</h2>

  <p>
    <strong>Project 3.1</strong><br>
    <strong>Name:</strong> Distributed computing<br>
    <strong>Skills required:</strong> Network, python / c++<br>
    <strong>Description:</strong> Make it possible to distribute analysis. A client and server needs to be
    written. The client will execute cppcheck to perform analysis. The programming language used to write the
    client and server is either python or c++ (your choice). The server shall be able to handle at least 100
    clients. The client and server needs to be cross platform.
  </p>

  </div> <!-- .wrap -->
</div> <!-- #content -->

</body>
</html>