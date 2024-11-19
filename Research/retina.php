<?php
  require_once('../lib.php');    # Load Ela's web constants

  SetPageTitle('Research Projects');
  HTMLHeader();               # These functions are in the system wwwlib.php
  PageStart();                # library
?>

<H2>Retinal image analysis</H2>
<p>
The pupil of the eye provides an opening through which the interior of the eye (ocular fundus) can be examined. The colours observed in images of the fundus depend on the architecture of its layers and the optical properties and quantities of the pigments, such as haemoglobins (in blood) and melanin (the same pigment which protects the skin from UV radiation). Many abnormal conditions cause changes in the fundus colouration, but are sometimes difficult to detect by visual inspection. 
</p>
<p>
The fundus colours can be predicted from the parameters describing the quantities of the pigments residing in different layers using a physics-based simulation of the light interaction with the ocular tissue. We have established that every combination of different amounts of the main pigments gives rise to a characteristic and unique colour. This has allowed us to develop a computational method for inferring the quantities of the pigments from fundus images taken over the range of wavelengths in the visible light spectrum. The estimated quantity of each parameter in each layer is shown in a separate image called parametric map. 
</p>
<p>
The <a href="http://www.cs.bham.ac.uk/~exc/Research/EPSRC_eye/epsrc_retina_project.html#fig_maps">maps of Retinal Blood and Macular Pigment</a> are of particular importance in the diagnosis of eye diseases. Small haemorrhages in the retina (where cells converting light to nervous signals reside) can be initial signs of diabetic retinopathy where early detection is clinically difficult but crucial if blindness is to be avoided. The changes in the distribution of the Macular Pigment may be a predictive factor in the risk of developing sight-threatening complications in age-related macular degeneration (ARMD).
</p>
<p>
Our method for the derivation of quantitative parameters using physics-based modelling is generic and has already been applied in other imaging domains, including cancers of the 
<a href="http://www.cs.bham.ac.uk/~exc/Research/projects.php#ref2skin">skin</a> and the 
<a href="http://www.cs.bham.ac.uk/~exc/Research/projects.php#ref2colon">colon</a>, 
<a href="http://www.cs.bham.ac.uk/~exc/Research/projects.php#ref2micro">fluorescence microscopy</a> and 
<a href="#p_astro">astronomy</a>.
<p>

<img src="http://www.cs.bham.ac.uk/~exc/Images/pm_retina.jpg" width="96" height="496" 
     style="float:right;" alt=""/> 
<h2>Physics based image interpretation of multispectral images of the ocular fundus</h2>

<p>
We have developed a detailed 
<a href="http://www.cs.bham.ac.uk/~exc/Research/EPSRC_eye/epsrc_retina_project.html">
optical model of fundus reflectance</a> 
under diffuse illumination using Monte Carlo simulation. The structural layers of our fundus model include the lens, the ocular media, the neural retina, the Retinal Pigment Epithelium (RPE), the choroid and the sclera. Each layer is characterised by its thickness, refractive index, anisotropy factor, absorption coefficient and scattering coefficient. The optical properties of each layer are determined by its constituents. The underlying properties of the tissue can be regarded as constant, with the main variability being due to changes in the concentration of haemoglobins in the retina and the choroid; melanin in the RPE and the choroid, and macular pigment in the neural retina. As a refinement over the existing models, we have shown that our model can separate the contributions from retinal and choroidal blood, and choroidal and RPE melanin.  
	</p>
<p>By applying the inverse model to every point in a multi-spectral image set, we can compute the values of the model parameters which describe the fundus tissue at that point and construct parametric maps which show the variation of each parameter across the entire image. 
</p>

<h2>Contact and non-contact SIAscopy</h2>

<p>In <i>contact SIAscopy</i>
<a href="http://simsysmolemate.files.wordpress.com/2011/07/molemate_in_holder.jpg"> a hand-held probe </a>
is placed against the skin and calibrated images of high resolution are acquired.
Subsequent computer analysis yields histological maps showing
<a href="http://simsys-molemate.com/2011/10/27/molemate-the-handheld-scanner-accurately-detects-skin-cancer/">
quantitative topographic maps</a>
of epidermal melanin, dermal melanin, haemoglobins and papillary dermis thickness.
This method is used for diagnosis of individual skin lesions and shows high sensitivity and specificity.
</p>

<p>In <i>non-contact SIAscopy</i> images of an arbitrary field of view can be taken using 
a conventional digital camera. This method does not require either calibration or tissue contact. 
Computer analysis yields parametric maps of epidermal melanin, dermal melanin and haemoglobins. 
These are used for pre-screening of 
<a href="http://www.gkklinika.com/en/?pageid=138&id=728&parent=428">whole body areas </a>
("mole mapping"). 
The method is tuned for high sensitivity; any suspicious moles can then be analysed in detail 
by contact SIAscopy.
</p>
<p>
	Non-contact SIAscopy has been adapted for use in beauty and cosmetics by 
	<a href="http://pgbeautyscience.com/siascope.php">Procter & Gamble.</a>
</p>

<h2>References</h2>
<p>
	See <a href="http://www.cs.bham.ac.uk/~exc/Research/publications.php#RTFToC2">publications</a>
</p>


<?php
  PageEnd();            # These are also in the system wwwlib.php library
  HTMLFooter();
?>

