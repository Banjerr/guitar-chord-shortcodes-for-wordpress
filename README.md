# guitar-chord-shortcodes-for-wordpress
Easily create guitar chord diagrams in a WordPress post or page with a shortcode and a few parameters.

<h2>Installation</h2>
<ol>
<li>Copy the plugin folder into your WordPress plugin directory</li>
<li>Activate the plugin</li>
</ol>

<h2>Usage</h2>

Type the shortcode [guitar-chord] into any post or page with the parameters name, type, placement and fingering.  Below is an example of an Em chord.

[guitar-chord name="E" type="minor" placement="0,2,2,0,0,0" fingering="0,1,2,0,0,0"]

The parameters name and type are only used to display the name and type of the chord.

<strong>Placement</strong> defines where the placement of the notes are on the fretboard.  Notice how there are six numbers for placement and fingering?  This is because there are six strings on the guitar.  The numbers you use represent the frets.

In the case of the example Em chord above, the sixth string is open, fifth string second fret, fourth sting second fret, third string open and so on.

<strong>Fingering</strong> is similar, but defines the fingering numbers and does not affect placement.

It is important you only include six values for placement and fingering and separate each value with a comma.  Do not include a comma at the end.

If a string is not to be played, use an "x" for that placement and fingering.

Here are some more examples:

[guitar-chord name="C" type="Major" placement="x,3,2,0,1,0" fingering="x,3,2,0,1,0"]

[guitar-chord name="A" type="m" placement="x,0,2,2,1,0" fingering="x,0,2,3,1,0"]

[guitar-chord name="A" type="m" placement="5,7,7,5,5,5" fingering="1,3,4,1,1,1"]
