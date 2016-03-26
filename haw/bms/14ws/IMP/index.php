<?php $title = "B-MS / IMP"; ?>
<?php include("/rcl/www/rcl/include1.php"); ?>

<?php
$c = new BMSCourse();

//Organisation
$c->semester("Wintersemester 2014/15", "Winter semester 2014/15");
$c->name("Image Processing (IMP)");
$c->type("Vorlesung", "lecture");
$c->dozent("Daniel Heid");
//Content
$c->topic("OpenGL-Geschichte, Rendering Pipelines",
          "History of OpenGL, Rendering Pipelines");
$c->topic("Grafik-Primitive, konvex, konkav, planar, NURB, Voxel",
          "Graphic primitives, convex, concave, planar, NURB, Voxel");
$c->topic("Display Listen, Vertex Arrays, Buffer Objects",
          "Display Lists, Vertex Arrays, Buffer Objects");
$c->topic("Koordinatensystem, homogene Koordinaten, Transformation, Projektion, Clipping, Viewport",
          "Coordinate System, Uniform Coordinates, Transformations, Projection, Clipping, Viewport");
$c->topic("Verdeckung, z-Buffer",
          "Occlusion, z-Buffer");
$c->topic("Farbmodelle (RGBA, CMYK, HSV), Farbmischung, Nebel",
          "Color Models (RGBA, CMYK, HSV), Color Mixture, Fog");
$c->topic("Anti-Aliasing: Aliasing, Abtasttheorem, Flächenabtastung, Accumulation Buffer, Multisample Anti Aliasing",
          "Anti-Aliasing: Aliasing, Sampling Theorem, Area Sampling, Accumulation Buffer, Multisample Anti Aliasing");
$c->topic("Shader: Vertex-Shader, Fragment-Shader, Tesselation, Geometry Shader, GLSL",
          "Shader: Vertex-Shader, Fragment-Shader, Tesselation, Geometry Shader, GLSL");
$c->topic("Beleuchtung: Ray Tracing, Radiosity, Diffus / Spekular / Ambient / Emissiv, Material, Lichtquellen, Normalenvektoren",
          "Lighting: Ray Tracing, Radiosity, Diffuse / Specular / Ambient / Emissive, Material, Light Sources, Normal Vectors");
$c->topic("Schattierung: Flat Shading, Gouraud Shading, Phong Shading",
          "Shading: Flat Shading, Gouraud Shading, Phong Shading");
$c->topic("Texturen: Texturkoordinaten, Texure Mapping, Textur-Filter, Mipmaps, Texture Wraps, Bump-Mapping, Multipass Rendering",
          "Textures: Texture Coordinates, Texure Mapping, Texture-Filter, Mipmaps, Texture Wraps, Bump-Mapping, Multipass Rendering");
$c->topic("Schatten: hart / weich, umbra / penumbra, Shadow Mapping, Tiefenkorrektur, Cascaded Shadow Mapping, Ambient Occlusion, Billboards, Volumenschatten",
          "Shadows: hard / soft, umbra / penumbra, Shadow Mapping, Depth Bias, Cascaded Shadow Mapping, Ambient Occlusion, Billboards, Volumetric Shadows");
$c->topic("Double Buffering, Animation, inverse Kinematik, Morphing, Partikel",
          "Double Buffering, Animation, inverse kinematics , Morphing, Particles");
$c->languages("Java, Scala, GLSL");
$c->technologies("OpenGL, JogAmp");
//$c->tools("");
$c->ide("Scala Eclipse");
//Grade
$c->cp("6");
$c->pruefung("Klausur", "written test");
$c->grade("1.0");

$c->printCourseInfo();
?>

<?php include("/rcl/www/rcl/include2.php"); ?>
