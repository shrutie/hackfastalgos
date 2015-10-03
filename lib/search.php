<?HH
/**
 * @author Rick Mac Gillis
 *
 * Implements various search algorithms.
 */

namespace HackFastAlgos;

class Search
{
	/**
	 * Operates in O(log n) or Omega(1) time.
	 * Learn more @link https://en.wikipedia.org/wiki/Binary_search_algorithm
	 */
	public static function binarySearch(Vector<int> $vector, int $find) : int
	{
		$start = 0;
		$end = $vector->count()-1;
		while ($end >= $start) {

			$middle = $end-$start;
			if ($vector[$middle] < $find) {
				$start = ++$middle;
			} else if ($vector[$middle] > $find) {
				$end = --$middle;
			} else {
				return $middle;
			}

		}

		return -1;
	}

	/**
	 * Operates in O(n) or Omega(1) time.
	 * Learn more @link https://en.wikipedia.org/wiki/Brute-force_search
	 */
	public static function bruteForceSearch(Vector<int> $vector, int $find) : int
	{
		$count = $vector->count();
		for ($i = 0; $i < $count; $i++) {
			if ($vector[$i] === $find) {
				return $i;
			}
		}

		return -1;
	}
}
