<?php
  
  require_once('../lib.php');

  HTMLHeader();
  PageStart();

?>

<h1>Research</h1>

<h2>Overview</h2>

<div style="float:right; width: 200px; text-align: center; padding: 1em;">
<img src="http://www.cs.bham.ac.uk/~exc/Images/mainpic.jpg"
     alt="Window in town hall, Victoria Island, CA. Represents science, medicine and mathematics"
     width="199"/>
<br/>
<span style="font-size:smaller; color:#993300;">Window in town hall, <br/> Victoria Island, CA.
<br/>Shows Science, Medicine and Mathematics brought together.</span>
</div>

<p>
My research area is image understanding and computer vision, especially
in application to medical images. This research is interdisciplinary and
it brings together studies of:
</p>

<div style="padding-left: 1.5em;">
<dl>
  <dt><b>Physics of image formation</b></dt>
  <dd> How a structure in the body is transformed
       into an image? How well do these transformations preserve important
       features of the structure? How to recover information about the body
       structures from their images?.
  </dd>
  <dt><b>Human visual perception</b></dt>
  <dd>How our visual system groups low level features into coherent entities?
      What human vision is good at and what are difficult visual tasks?
      How to engineer practical vision systems inspired by powerful mechanisms
      developed in natural vision?
  </dd>
  <dt><b>Medical diagnosis</b></dt>
  <dd>What visual clues clinicians use for diagnosis?
      How do they combine visual information in the image with previous
      experience to arrive at diagnosis?
      How to model and exploit these abilities to develop practical
      computer-based aids to diagnosis?
  </dd>
</dl>
</div>

<p>
In addition to interesting theoretical questions, the practical aim is
to develop computer tools which assist the clinical expert in difficult
visual tasks. Medical imaging domains include 
dermatology (pigmented skin lesions, or moles), ophthalmology (fundus
images), endoscopy, radiology and a range of microscopies. 
</p>

<p>
In collaboration with colleagues working in the area of Natural Computation
and Machine Learning I have begun to explore the use of those techniques in 
medical image interpretation.
</p>


<?php

  PageEnd();
  HTMLFooter();
?>
