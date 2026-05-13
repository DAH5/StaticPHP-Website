var adjectivesWordList =
{
    "colors":
    [
        "ashy",
        "blue",
        "green",
        "grey",
        "icy",
        "orange",
        "pink",
        "purple",
        "rainbow",
        "red",
        "turquoise",
        "yellow",
    ],
	"appearance":
    [
        "bald",
        "beautiful",
        "clean",
        "elegant",
        "fancy",
        "handsome",
        "magnificent",
        "shapely",
    ],
	"personality":
    [
        "agreeable",
        "ambitious",
        "brave",
        "calm",
        "clumsy",
        "delightful",
        "eager",
        "faithful",
        "fierce",
        "gentle",
        "happy",
        "harmless",
        "intimidating",
        "itchy",
        "jealous",
        "jolly",
        "kind",
        "lively",
        "nervous",
        "nice",
        "obedient",
        "polite",
        "proud",
        "sad",
        "scary",
        "silly",
        "thankful",
        "thoughtless",
        "victorious",
        "witty",
        "wonderful",
        "worried",
        "zealous",
    ],
    "conditions":
    [
        "alive",
        "better",
        "careful",
        "clever",
        "famous",
        "gifted",
        "hallowed",
        "helpful",
        "important",
        "liked",
        "odd",
        "popular",
        "powerful",
        "rich",
        "shy",
        "tender",
        "vast",
    ],
    "location":
    [
        "equatorial",
        "lunar",
        "northern",
        "oceanic",
        "polar",
    ],
    "sounds":
    [
        "cooing",
        "deafening",
        "echoing",
        "faint",
        "harsh",
        "hissing",
        "howling",
        "hushed",
        "husky",
        "loud",
        "melodic",
        "mute",
        "noisy",
        "purring",
        "quiet",
        "raspy",
        "resonant",
        "rhythmic",
        "shrill",
        "silent",
        "soft",
        "squeaking",
        "thundering",
        "tinkling",
        "wailing",
        "whining",
        "whispering",
    ],
    "tastes":
    [
        "acidic",
        "bitter",
        "cool",
        "delicious",
        "fresh",
        "nutritious",
        "salty",
        "savory",
        "sour",
        "spicy",
        "sweet",
        "tasty",
        "yummy",
    ],
    "time":
    [
        "ancient",
        "brief",
        "bustling",
        "early",
        "fast",
        "future",
        "hasty",
        "late",
        "long",
        "modern",
        "prompt",
        "quick",
        "rapid",
        "rushing",
        "short",
        "slow",
        "snappy",
        "speeding",
        "speedy",
        "swift",
        "whirlwind",
        "young",
    ],
}

var nounsWordList = 
{
    "animals":
    [
        "bear",
        "bee",
        "bobcat",
        "cat",
        "caterpillar",
        "cheetah",
        "dog",
        "dolphin",
        "elephant",
        "giraffe",
        "goat",
        "jellyfish",
        "leopard",
        "lion",
        "meerkat",
        "mouse",
        "panda",
        "sheep",
        "tiger",
        "wasp",
        "wolf",
        "zebra",
    ],
    "fruits":
    [
        "apple",
        "apricot",
        "avocado",
        "banana",
        "cherry",
        "cucumber",
        "fig",
        "grapefruit",
        "kumquat",
        "lemon",
        "lychee",
        "mango",
        "peach",
        "pepper",
        "pineapple",
        "plum",
        "potato",
        "prune",
        "raspberry",
        "strawberry",
        "tomato",
        "watermelon",
    ],
    "birds":
    [
        "albatross",
        "blackbird",
        "chicken",
        "chiffchaff",
        "crow",
        "curlew",
        "duck",
        "eagle",
        "goose",
        "kiwi",
        "osprey",
        "owl",
        "penguin",
        "pigeon",
        "robin",
        "sparrow",
        "swan",
        "woodpecker",
        "wren",
    ],
    "flowers":
    [
        "bluebell",
        "carnation",
        "crocus",
        "daffodil",
        "daisy",
        "dandelion",
        "lily",
        "orchid",
        "pansy",
        "poppy",
        "rose",
        "sunflower",
        "tulip",
    ],
    "metals":
    [
        "alloy",
        "aluminum",
        "antimony",
        "brass",
        "bronze",
        "chrome",
        "chromium",
        "copper",
        "gold",
        "gunmetal",
        "iridium",
        "iron",
        "lead",
        "magnesium",
        "metal",
        "mercury",
        "pewter",
        "platinum",
        "silver",
        "steel",
        "tin",
        "titanium",
        "tungsten",
        "zinc",
    ],
    "transport":
    [
        "balloon",
        "bicycle",
        "boat",
        "bus",
        "car",
        "coach",
        "helicopter",
        "jet",
        "lawnmower",
        "lifeboat",
        "lorry",
        "plane",
        "rickshaw",
        "ship",
        "skateboard",
        "tank",
        "taxi",
        "tractor",
        "train",
        "truck",
        "van",
    ],
}

var adjectiveTypes = Object.keys( adjectivesWordList );
var nounsTypes = Object.keys( nounsWordList );

function getRandomInt( max )
{
    return Math.floor( Math.random() * max );
}

function generateName( adjectiveCount = 2, nounCount = 1 )
{
    var name = "";

    for( var a = 0; a < adjectiveCount; a++ )
    {
        var adjectiveType = adjectiveTypes[ getRandomInt( adjectiveTypes.length ) ];
        var adjectiveTypeWordsList = adjectivesWordList[ adjectiveType ];

        var adjectiveWord = adjectiveTypeWordsList[ getRandomInt( adjectiveTypeWordsList.length ) ];

        if( name )
            name += "-" + adjectiveWord;
        else
            name = adjectiveWord;
    }

    for( var n = 0; n < nounCount; n++ )
    {
        var nounType = nounsTypes[ getRandomInt( nounsTypes.length ) ];
        var nounTypeWordsList = nounsWordList[ nounType ];
        var nounWord = nounTypeWordsList[ getRandomInt( nounTypeWordsList.length ) ];

        if( name )
            name += "-" + nounWord;
        else
            name = nounWord;
    }

    return name;
}

var generatedName = generateName( getRandomInt( 3 ) + 1, 1 );

var nameElement = document.getElementById( 'name' );

if( generateName )
    nameElement.innerHTML = '<code>' + generatedName + '</code>';

