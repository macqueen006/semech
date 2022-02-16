<?php
namespace App\Traits;

trait Search
{
    private function buildWildCards($term)
    {
        if ($term == "") {
            return $term;
        }

        // Strip MySQL reserved symbols
        $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];
//                $words = explode(' ', $term);
//        foreach ($words as $idx => $word) {
//            // Add operators so we can leverage the boolean mode of
//            // fulltext indices.
//            $words[$idx] = "+" . $word . "*";
//        }
//        $term = implode(' ', $words);
        return str_replace($reservedSymbols, '', $term);
    }

    protected function scopeSearch($query, $term)
    {
//        $columns = implode(',', $this->searchable);

        // Boolean mode allows us to match john* for words starting with john
        // (https://dev.mysql.com/doc/refman/5.6/en/fulltext-boolean.html)
//        $query->whereRaw(
//            "MATCH ({$columns}) AGAINST (? IN BOOLEAN MODE)",
//            $this->buildWildCards($term)
//        );
//        return $query;

//        return $query->when($term, function ($post) use($term) {
//               return $post->where('title', 'like', "%$term%");
//           })->published()
//               ->latest()
//           ->paginate($count);
    }
}
