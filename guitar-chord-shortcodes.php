<?php
/**
 * @package           Guitar Chords Shortcodes
 * @author            Web Monkey Design and Development
 * @author            Myles English
 * @author            Myles English <myleslloydenglish@hotmail.com>
 * @link              http://www.webmonkeydd.com/
 *
 * @wordpress-plugin
 * Plugin Name:       Guitar Chord Shortcodes
 * Description:       Creates Guitar Chords with the Use of the Simple Shortcode [guitar-chord] and a Few Parameters.
 * Version:           1.0.0
 * Author:            Web Monkey Design and Development
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'wp_enqueue_scripts', 'guitar_chord_shortcodes_enqueue_style', 2 );
function guitar_chord_shortcodes_enqueue_style(){
    wp_enqueue_style( 'guitar_chord_css', plugins_url('css/style.css', __FILE__));
}

class Guitar_Chords {
	public function the_chord($atts, $name, $type, $fingering = array(2,1,0,0,0,3), $placement = array(3,2,0,0,0,3)){
		$chord = (object) array();
		$chord->name = $atts['name'];
		$chord->type = $atts['type'];
		$chord->fingering =  explode(',' , $atts['fingering']);
		$chord->placement =  explode(',' , $atts['placement']);

		$fret_markers = array(null, 'I', null, 'III', null, 'V', null, 'VII', null, null, 'X', null, 'XII', null, null, 'XV');

		// will remove x's later, but also need the array with the x's
		$preserved_placement = $chord->placement;

		// remove x from array to find min and max position of frets
		foreach(array_keys($chord->placement, 'x') as $key){
			unset($chord->placement[$key]);
		}

		$min_pos = min($chord->placement);
		$max_pos = max($chord->placement) + 1;

		if($min_pos != 0){
			$min_pos = $min_pos - 1;
		}

		$data = '<table class="guitar-chord">';
		$data .= '<tr><td colspan="7">' . $chord->name . ' ' . $chord->type . '</td></tr>';
		// build the chord
		// f=fret
		// s=string
		for($f=$min_pos; $f<=$max_pos; $f++){
			$data .= '<tr>';
			for($s=0; $s<6; $s++){
				if($s == 0){
					if($fret_markers[$f] != null){
						$data .= '<td class="fret-marker"><span>' . $fret_markers[$f] . '</span></td>';
					}
					else{
						$data .='<td class="empty-fret-marker"></td>';
					}
				}
				if($f == 0){
					$class = 'guitar-chord-nut';
				}else{
					$class = '';
				}

				if($preserved_placement[$s] == $f){
					$finger = $chord->fingering[$s];
				}elseif($f == $min_pos && $preserved_placement[$s] == 'x'){
					$finger = 'x';
				}else{
					$finger = '';
				}

				$data .='<td class="fretted-note ' . $class . '"><span class="guitar-chord-note">' . $finger . '</span></td>';
			}
			$data .= '</tr>';
		}

		$data .= '</table>';

		return $data;
	}
}

add_shortcode( 'guitar-chord', array('Guitar_Chords', 'the_chord') );


// TODO fix 5th string to only display when it is near a chord formation
class Banjo_Chords {
	public function the_banjo_chord($atts, $name, $type, $fingering = array(0,2,0,1,3), $placement = array(0,2,0,1,2)){
		$banjoChord = (object) array();
		$banjoChord->name = $atts['name'];
		$banjoChord->type = $atts['type'];
		$banjoChord->fingering =  explode(',' , $atts['fingering']);
		$banjoChord->placement =  explode(',' , $atts['placement']);

		$fret_markers = array(null, 'I', null, 'III', null, 'V', null, 'VII', null, null, 'X', null, 'XII', null, null, 'XV');

		// will remove x's later, but also need the array with the x's
		$preserved_placement = $banjoChord->placement;

		// remove x from array to find min and max position of frets
		foreach(array_keys($banjoChord->placement, 'x') as $key){
			unset($banjoChord->placement[$key]);
		}

		$min_pos = min($banjoChord->placement);
		$max_pos = max($banjoChord->placement) + 1;

		if($min_pos != 0){
			$min_pos = $min_pos - 1;
		}

		$data = '<table class="banjo-chord">';
		$data .= '<tr><td colspan="7">' . $banjoChord->name . ' ' . $banjoChord->type . '</td></tr>';
		// build the chord
		// f=fret
		// s=string
		for($f=$min_pos; $f<=$max_pos; $f++){
			$data .= '<tr>';
			for($s=0; $s<5; $s++){
				if($s == 0){
					if($fret_markers[$f] != null){
						$data .= '<td class="fret-marker"><span>' . $fret_markers[$f] . '</span></td>';
					}
					else{
						$data .='<td class="empty-fret-marker"></td>';
					}
				}
				if($f == 0){
					$class = 'guitar-chord-nut';
				}else{
					$class = '';
				}

				if($preserved_placement[$s] == $f){
					$finger = $banjoChord->fingering[$s];
				}elseif($f == $min_pos && $preserved_placement[$s] == 'x'){
					$finger = 'x';
				}else{
					$finger = '';
				}

				$data .='<td class="fretted-note ' . $class . '"><span class="guitar-chord-note">' . $finger . '</span></td>';
			}
			$data .= '</tr>';
		}

		$data .= '</table>';

		return $data;
	}
}

add_shortcode( 'banjo-chord', array('Banjo_Chords', 'the_banjo_chord') );

?>
