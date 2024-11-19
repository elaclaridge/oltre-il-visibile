<?php
  require_once('../lib.php');    # Load Ela's web constants

  SetPageTitle('Research Projects');
  HTMLHeader();               # These functions are in the system wwwlib.php
  PageStart();                # library
?>

<H2>Skin and skin cancer</H2>

<p>
According to Cancer Research UK over 12,000 people were newly diagnosed with 
malignant melanoma and more than 2,000 died from the disease in 2010. 
A critical factor in improving survival rates is early detection. 
General practitioners, who are the first point of referral, 
typically miss a third of malignancies whilst unnecessarily referring over 90% 
of benign lesions to dermatology specialists. 
</p>
<p>
We have invented and developed an imaging and image analysis technology, 
commonly referred to as 
<a href="http://simsys-molemate.com/simsys-molemate/siascopy/">SIAscopy</a>,
	which has improved diagnostic performance of GPs and other, non-consultant, medical personnel.
	It is also appreciated by patients because in most cases diagnosis can be made instantly.
	SIAscopy is used worldwide in clinics, cosmetics salons and in cosmetics research. 
	Clinicians and beauty practitioners using the technology give consistently positive 
	<a href="http://www.cs.bham.ac.uk/~exc/Research/SIAtestimonials.php">testimonials</a>.
	Commercially it has been recognised as
	<a href="http://www.cs.bham.ac.uk/~exc/Research/SIAinbusines.php">
		an innovative technology and a competitive product</a>.

</p>

<h2>Physics based interpretation of images of pigmented skin lesions</h2>
<img src="http://www.cs.bham.ac.uk/~exc/Images/pm_melanoma.jpg" width="96" height="496" 
     style="float:right;" alt=""/> 
<p>
	Through an understanding of the image formation process, diagnostically important facts about the internal structure and composition
	of pigmented skin lesions can be derived from their multispectral images. 
	A 
	<a href="http://www.cs.bham.ac.uk/~exc/Research/EPSRC_skin/epsrc_skin_project.html">physics-based model of tissue reflectance </a>
	provides a cross-reference
	between image values and the underlying histological parameters. It is constructed by computing the spectral composition of light
	remitted from the skin given parameters specifying its structure and optical properties. The model is representative of all the normal
	human skin colours, irrespective of racial origin, age or gender. Abnormal skin colours do not conform to this model and thus can be
	detected. 
	</p>
<p>Once the model is constructed, for each pixel in a colour image its histological parameters are computed from the model.
	Represented as images, these ‘parametric maps’ show the concentration of dermal and epidermal melanin, blood and collagen thickness
	across the imaged skin as well as locations where abnormal colouration exists. In a clinical study the parametric maps were used by a
	clinician to detect the presence of malignant melanoma in a set of 348 pigmented lesions imaged using a commercial device, the
	SIAscope. Logistic regression identified the presence of melanin in the dermis, the abnormal distribution of blood within the lesion and
	the lesion size as the most diagnostically informative features. Classification based on these features showed 80.1% sensitivity and 82.7%
	specificity in melanoma detection.
</p>

<h2>Contact and non-contact SIAscopy</h2>

<p>In <i>contact SIAscopy</i>
<a href="http://simsysmolemate.files.wordpress.com/2011/07/molemate_in_holder.jpg"> a hand-held probe </a>
is placed against the skin and calibrated images of high resolution are acquired.
Subsequent computer analysis yields histological maps showing
<a href="http://www.medxhealth.com/default.aspx">
quantitative topographic maps</a>
of epidermal melanin, dermal melanin, haemoglobins and papillary dermis thickness.
This method is used for diagnosis of individual skin lesions and shows high sensitivity and specificity.
</p>

<p>In <i>non-contact SIAscopy</i> images of an arbitrary field of view can be taken using 
a conventional digital camera. This method does not require either calibration or tissue contact. 
Computer analysis yields parametric maps of epidermal melanin, dermal melanin and haemoglobins. 
These are used for pre-screening of 
<a href="http://www.gkklinika.com/en/page/moles-and-skin-cancer-11/mole-non-contact-siascopy-scanning-50">whole body areas </a>
("mole mapping"). 
The method is tuned for high sensitivity; any suspicious moles can then be analysed in detail 
by contact SIAscopy.
</p>
<p>
	Non-contact SIAscopy has been adapted for use in beauty and cosmetics by 
	<a href="http://www.biospace.com/News/powered-by-siascopy-procter-gamble-and-astron/23893">Procter & Gamble.</a>
</p>

<h2>References</h2>
<p>
	See <a href="http://www.cs.bham.ac.uk/~exc/Research/publications.php#RTFToC2">publications</a>
</p>


<?php
  PageEnd();            # These are also in the system wwwlib.php library
  HTMLFooter();
?>

