<?php
$comment1 = [
    "commentId" => 1,
    "commentContent" => "Hai",
    "replies" => [
        [
            "commentId" => 11,
            "commentContent" => "Hai juga",
            "replies" => [
                [
                    "commentId" => 111,
                    "commentContent" => "Haai juga hai jugaa"
                ],
                [
                    "commentId" => 112,
                    "commentContent" => "Haai juga hai jugaa"
                ]
            ]
        ],
        [
            "commentId" => 12,
            "commentContent" => "Hai juga",
            "replies" => [
                [
                    "commentId" => 121,
                    "commentContent" => "Haai juga hai jugaa"
                ]
            ]
        ]
    ]
];

$comment2 = [
    "commentId" => 2,
    "commentContent" => "Halooo"
];

// Menggabungkan komentar-komentar ke dalam array
$comments = [$comment1, $comment2];

// Menghitung total komentar
function countComments($comments)
{
    $count = count($comments);

    foreach ($comments as $comment) {
        if (isset($comment["replies"])) {
            $count += countComments($comment["replies"]);
        }
    }

    return $count;
}

$totalComments = countComments($comments);
echo "Total komentar adalah: " . $totalComments . " komentar\n";
?>