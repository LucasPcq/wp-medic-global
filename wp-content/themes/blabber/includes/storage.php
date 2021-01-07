<?php
/**
 * Theme storage manipulations
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */

// Disable direct call
if ( ! defined( 'ABSPATH' ) ) {
	exit; }

// Get theme variable
if ( ! function_exists( 'blabber_storage_get' ) ) {
	function blabber_storage_get( $var_name, $default = '' ) {
		global $BLABBER_STORAGE;
		return isset( $BLABBER_STORAGE[ $var_name ] ) ? $BLABBER_STORAGE[ $var_name ] : $default;
	}
}

// Set theme variable
if ( ! function_exists( 'blabber_storage_set' ) ) {
	function blabber_storage_set( $var_name, $value ) {
		global $BLABBER_STORAGE;
		$BLABBER_STORAGE[ $var_name ] = $value;
	}
}

// Check if theme variable is empty
if ( ! function_exists( 'blabber_storage_empty' ) ) {
	function blabber_storage_empty( $var_name, $key = '', $key2 = '' ) {
		global $BLABBER_STORAGE;
		if ( ! empty( $key ) && ! empty( $key2 ) ) {
			return empty( $BLABBER_STORAGE[ $var_name ][ $key ][ $key2 ] );
		} elseif ( ! empty( $key ) ) {
			return empty( $BLABBER_STORAGE[ $var_name ][ $key ] );
		} else {
			return empty( $BLABBER_STORAGE[ $var_name ] );
		}
	}
}

// Check if theme variable is set
if ( ! function_exists( 'blabber_storage_isset' ) ) {
	function blabber_storage_isset( $var_name, $key = '', $key2 = '' ) {
		global $BLABBER_STORAGE;
		if ( ! empty( $key ) && ! empty( $key2 ) ) {
			return isset( $BLABBER_STORAGE[ $var_name ][ $key ][ $key2 ] );
		} elseif ( ! empty( $key ) ) {
			return isset( $BLABBER_STORAGE[ $var_name ][ $key ] );
		} else {
			return isset( $BLABBER_STORAGE[ $var_name ] );
		}
	}
}

// Inc/Dec theme variable with specified value
if ( ! function_exists( 'blabber_storage_inc' ) ) {
	function blabber_storage_inc( $var_name, $value = 1 ) {
		global $BLABBER_STORAGE;
		if ( empty( $BLABBER_STORAGE[ $var_name ] ) ) {
			$BLABBER_STORAGE[ $var_name ] = 0;
		}
		$BLABBER_STORAGE[ $var_name ] += $value;
	}
}

// Concatenate theme variable with specified value
if ( ! function_exists( 'blabber_storage_concat' ) ) {
	function blabber_storage_concat( $var_name, $value ) {
		global $BLABBER_STORAGE;
		if ( empty( $BLABBER_STORAGE[ $var_name ] ) ) {
			$BLABBER_STORAGE[ $var_name ] = '';
		}
		$BLABBER_STORAGE[ $var_name ] .= $value;
	}
}

// Get array (one or two dim) element
if ( ! function_exists( 'blabber_storage_get_array' ) ) {
	function blabber_storage_get_array( $var_name, $key, $key2 = '', $default = '' ) {
		global $BLABBER_STORAGE;
		if ( empty( $key2 ) ) {
			return ! empty( $var_name ) && ! empty( $key ) && isset( $BLABBER_STORAGE[ $var_name ][ $key ] ) ? $BLABBER_STORAGE[ $var_name ][ $key ] : $default;
		} else {
			return ! empty( $var_name ) && ! empty( $key ) && isset( $BLABBER_STORAGE[ $var_name ][ $key ][ $key2 ] ) ? $BLABBER_STORAGE[ $var_name ][ $key ][ $key2 ] : $default;
		}
	}
}

// Set array element
if ( ! function_exists( 'blabber_storage_set_array' ) ) {
	function blabber_storage_set_array( $var_name, $key, $value ) {
		global $BLABBER_STORAGE;
		if ( ! isset( $BLABBER_STORAGE[ $var_name ] ) ) {
			$BLABBER_STORAGE[ $var_name ] = array();
		}
		if ( '' === $key ) {
			$BLABBER_STORAGE[ $var_name ][] = $value;
		} else {
			$BLABBER_STORAGE[ $var_name ][ $key ] = $value;
		}
	}
}

// Set two-dim array element
if ( ! function_exists( 'blabber_storage_set_array2' ) ) {
	function blabber_storage_set_array2( $var_name, $key, $key2, $value ) {
		global $BLABBER_STORAGE;
		if ( ! isset( $BLABBER_STORAGE[ $var_name ] ) ) {
			$BLABBER_STORAGE[ $var_name ] = array();
		}
		if ( ! isset( $BLABBER_STORAGE[ $var_name ][ $key ] ) ) {
			$BLABBER_STORAGE[ $var_name ][ $key ] = array();
		}
		if ( '' === $key2 ) {
			$BLABBER_STORAGE[ $var_name ][ $key ][] = $value;
		} else {
			$BLABBER_STORAGE[ $var_name ][ $key ][ $key2 ] = $value;
		}
	}
}

// Merge array elements
if ( ! function_exists( 'blabber_storage_merge_array' ) ) {
	function blabber_storage_merge_array( $var_name, $key, $value ) {
		global $BLABBER_STORAGE;
		if ( ! isset( $BLABBER_STORAGE[ $var_name ] ) ) {
			$BLABBER_STORAGE[ $var_name ] = array();
		}
		if ( '' === $key ) {
			$BLABBER_STORAGE[ $var_name ] = array_merge( $BLABBER_STORAGE[ $var_name ], $value );
		} else {
			$BLABBER_STORAGE[ $var_name ][ $key ] = array_merge( $BLABBER_STORAGE[ $var_name ][ $key ], $value );
		}
	}
}

// Add array element after the key
if ( ! function_exists( 'blabber_storage_set_array_after' ) ) {
	function blabber_storage_set_array_after( $var_name, $after, $key, $value = '' ) {
		global $BLABBER_STORAGE;
		if ( ! isset( $BLABBER_STORAGE[ $var_name ] ) ) {
			$BLABBER_STORAGE[ $var_name ] = array();
		}
		if ( is_array( $key ) ) {
			blabber_array_insert_after( $BLABBER_STORAGE[ $var_name ], $after, $key );
		} else {
			blabber_array_insert_after( $BLABBER_STORAGE[ $var_name ], $after, array( $key => $value ) );
		}
	}
}

// Add array element before the key
if ( ! function_exists( 'blabber_storage_set_array_before' ) ) {
	function blabber_storage_set_array_before( $var_name, $before, $key, $value = '' ) {
		global $BLABBER_STORAGE;
		if ( ! isset( $BLABBER_STORAGE[ $var_name ] ) ) {
			$BLABBER_STORAGE[ $var_name ] = array();
		}
		if ( is_array( $key ) ) {
			blabber_array_insert_before( $BLABBER_STORAGE[ $var_name ], $before, $key );
		} else {
			blabber_array_insert_before( $BLABBER_STORAGE[ $var_name ], $before, array( $key => $value ) );
		}
	}
}

// Push element into array
if ( ! function_exists( 'blabber_storage_push_array' ) ) {
	function blabber_storage_push_array( $var_name, $key, $value ) {
		global $BLABBER_STORAGE;
		if ( ! isset( $BLABBER_STORAGE[ $var_name ] ) ) {
			$BLABBER_STORAGE[ $var_name ] = array();
		}
		if ( '' === $key ) {
			array_push( $BLABBER_STORAGE[ $var_name ], $value );
		} else {
			if ( ! isset( $BLABBER_STORAGE[ $var_name ][ $key ] ) ) {
				$BLABBER_STORAGE[ $var_name ][ $key ] = array();
			}
			array_push( $BLABBER_STORAGE[ $var_name ][ $key ], $value );
		}
	}
}

// Pop element from array
if ( ! function_exists( 'blabber_storage_pop_array' ) ) {
	function blabber_storage_pop_array( $var_name, $key = '', $defa = '' ) {
		global $BLABBER_STORAGE;
		$rez = $defa;
		if ( '' === $key ) {
			if ( isset( $BLABBER_STORAGE[ $var_name ] ) && is_array( $BLABBER_STORAGE[ $var_name ] ) && count( $BLABBER_STORAGE[ $var_name ] ) > 0 ) {
				$rez = array_pop( $BLABBER_STORAGE[ $var_name ] );
			}
		} else {
			if ( isset( $BLABBER_STORAGE[ $var_name ][ $key ] ) && is_array( $BLABBER_STORAGE[ $var_name ][ $key ] ) && count( $BLABBER_STORAGE[ $var_name ][ $key ] ) > 0 ) {
				$rez = array_pop( $BLABBER_STORAGE[ $var_name ][ $key ] );
			}
		}
		return $rez;
	}
}

// Inc/Dec array element with specified value
if ( ! function_exists( 'blabber_storage_inc_array' ) ) {
	function blabber_storage_inc_array( $var_name, $key, $value = 1 ) {
		global $BLABBER_STORAGE;
		if ( ! isset( $BLABBER_STORAGE[ $var_name ] ) ) {
			$BLABBER_STORAGE[ $var_name ] = array();
		}
		if ( empty( $BLABBER_STORAGE[ $var_name ][ $key ] ) ) {
			$BLABBER_STORAGE[ $var_name ][ $key ] = 0;
		}
		$BLABBER_STORAGE[ $var_name ][ $key ] += $value;
	}
}

// Concatenate array element with specified value
if ( ! function_exists( 'blabber_storage_concat_array' ) ) {
	function blabber_storage_concat_array( $var_name, $key, $value ) {
		global $BLABBER_STORAGE;
		if ( ! isset( $BLABBER_STORAGE[ $var_name ] ) ) {
			$BLABBER_STORAGE[ $var_name ] = array();
		}
		if ( empty( $BLABBER_STORAGE[ $var_name ][ $key ] ) ) {
			$BLABBER_STORAGE[ $var_name ][ $key ] = '';
		}
		$BLABBER_STORAGE[ $var_name ][ $key ] .= $value;
	}
}

// Call object's method
if ( ! function_exists( 'blabber_storage_call_obj_method' ) ) {
	function blabber_storage_call_obj_method( $var_name, $method, $param = null ) {
		global $BLABBER_STORAGE;
		if ( null === $param ) {
			return ! empty( $var_name ) && ! empty( $method ) && isset( $BLABBER_STORAGE[ $var_name ] ) ? $BLABBER_STORAGE[ $var_name ]->$method() : '';
		} else {
			return ! empty( $var_name ) && ! empty( $method ) && isset( $BLABBER_STORAGE[ $var_name ] ) ? $BLABBER_STORAGE[ $var_name ]->$method( $param ) : '';
		}
	}
}

// Get object's property
if ( ! function_exists( 'blabber_storage_get_obj_property' ) ) {
	function blabber_storage_get_obj_property( $var_name, $prop, $default = '' ) {
		global $BLABBER_STORAGE;
		return ! empty( $var_name ) && ! empty( $prop ) && isset( $BLABBER_STORAGE[ $var_name ]->$prop ) ? $BLABBER_STORAGE[ $var_name ]->$prop : $default;
	}
}
