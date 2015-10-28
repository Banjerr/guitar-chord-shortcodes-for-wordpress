=== Guitar Chord Diagram Shortcode ===
Contributors: Myles English (Bijingus)
Tags: guitar, chord, shortcode, diagram
Requires at least: 3.0.1
Tested up to: 1.0
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easily create guitar chord diagrams in a WordPress post or page with a shortcode and a few parameters.

== Description ==

Type the shortcode [guitar-chord] into any post or page with the parameters name, type, placement and fingering.  Below is an example of an Em chord.

[guitar-chord name="E" type="minor" placement="0,2,2,0,0,0" fingering="0,1,2,0,0,0"]

The parameters name and type are only used to display the name and type of the chord.

Placement defines where the placement of the notes are on the fretboard.  Notice how there are six numbers for placement and fingering?  This is because there are six strings on the guitar.  The numbers you use represent the frets.

In the case of the example Em chord above, the sixth string is open, fifth string second fret, fourth sting second fret, third string open and so on.

Fingering is similar, but defines the fingering numbers and does not affect placement.

It is important you only include six values for placement and fingering and separate each value with a comma.  Do not include a comma at the end.

If a string is not to be played, use an "x" for that placement and fingering.

Here are some more examples:

[guitar-chord name="C" type="Major" placement="x,3,2,0,1,0" fingering="x,3,2,0,1,0"]

[guitar-chord name="A" type="m" placement="x,0,2,2,1,0" fingering="x,0,2,3,1,0"]

[guitar-chord name="A" type="m" placement="5,7,7,5,5,5" fingering="1,3,4,1,1,1"]

== Installation ==

1. Copy the plugin folder into your WordPress plugin directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use the shortcode [guitar-chord] OR [banjo-chord] with the appropriate parameters

== Frequently Asked Questions ==

= The chord diagram isn't displaying correctly =

Double check every parameter is typed and speelled correctly.  Also check that there are six comma separated values for fingering and placement and that there is no comma after the sixth value.

== Screenshots ==

1. This screen shot displays what the guitar chord diagrams will look like in a post or page.

# this is an example of the banjo-chord shortcode

![](https://dl.dropboxusercontent.com/s/ijrnb5apdmol9zv/2727B926-70AE-431F-9E08-F60B971A683C-22028-0000253AD2CD9977.gif?dl=0)

== Changelog ==

= 1.0 =
* Release
