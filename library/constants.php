<?php
CONST CONTENT_ACTIVE = 1;
CONST CONTENT_INACTIVE = 2;
CONST CONTENT_INPROGRESS = 4;
CONST CONTENT_DELETED = 5;
CONST CONTENT_PENDING = 6;
CONST CONTENT_APPROVED = 7;
CONST CONTENT_INCOMPLETE = 8;
CONST CONTENT_REJECTED = 9;
CONST CONTENT_CLOSED = 10;
CONST CONTENT_NOT_AVAILABLE = -1;
CONST CONTENT_ACCEPTED = 11;


CONST USER_ROLE_ADMIN = 1;
CONST USER_ROLE_USER = 2;

CONST USER_FACEBOOK = 2;
CONST USER_GUEST = 1;

CONST USER_TYPE_GUEST = 1;
CONST DEFAULT_CARD_LEVEL_ID = 1; //initial level of the card
CONST DEFAULT_USER_LEVEL_ID = 1; //initial level of the card
CONST DEFAULT_CARD_COUNT = 1;  //initial card count
CONST MAX_CARD_IN_DECK = 8;
CONST DECK_ACTIVE = 1;
 
CONST CARD_RARITY_COMMON = 1;
CONST CARD_RARITY_RARE = 2;
CONST CARD_RARITY_EPIC = 3;
CONST CARD_RARITY_ULTRA_RARE = 4;
CONST CARD_RARITY_ULTRA_EPIC = 4;

CONST CARD_TYPE_CHARACTER = 1;
CONST CARD_TYPE_POWER = 2;
CONST CARD_TYPE_TROOP = 1;
CONST CARD_TYPE_SPELL = 2; 
CONST CARD_TYPE_BUILDING = 3;

CONST GOOGLE_ACCOUNT = 2;
CONST FACEBOOK_ACCOUNT = 1;
CONST GAME_CENTER = 3;

CONST DEFAULT_STADIUM = 1;

CONST MAX_SLEEP_TIME = 50;
CONST MAX_MATCHING_PLAYERS = 1;
CONST ROOM_SEARCH_TIMEOUT_TIME = 10; //room waiting time 30
CONST MAX_PLAYERS_COUNT = 2; //max players in one room

CONST BATTLE_WON_STATUS = 1;
CONST BATTLE_LOST_STATUS = 2;
CONST BATTLE_DRAW_STATUS = 3;
CONST BATTLE_DEFAULT_STATUS = -1;

CONST MIN_RELICS_COUNT = 0;

/*CONST CUBE_TITANIUM = 1;
CONST CUBE_DIAMOND = 2;
CONST CUBE_PLATINUM = 3;
CONST CUBE_COPPER = 4;
CONST CUBE_BRONZE = 5;*/

CONST CUBE_TITANIUM = 5;
CONST CUBE_DIAMOND = 4;
CONST CUBE_PLATINUM = 3;
CONST CUBE_COPPER = 2;
CONST CUBE_BRONZE = 1;

CONST CUBE_FIRECRACKER = 1;
CONST CUBE_BOMB = 2;
CONST CUBE_ROCKET = 3;
CONST CUBE_DYNAMITE = 4;
CONST CUBE_METALBOMB = 5;
CONST CUBE_EARNED_DURING_MATCH = 1;

/*CONST UNLOCK_CUBE_TITANIUM_TIMEOUT = 10; //3hrs 10800
CONST UNLOCK_CUBE_DIAMOND_TIMEOUT = 10; //6hrs 21600
CONST UNLOCK_CUBE_PLATINUM_TIMEOUT = 8; //9hrs 32400
CONST UNLOCK_CUBE_BRONZE_TIMEOUT = 10; //12hrs 43200 - 1hr for testing
CONST UNLOCK_CUBE_COPPER_TIMEOUT = 10; //24hrs 86400*/
CONST UNLOCK_CUBE_FIRECRACKER_TIMEOUT = 2; //3hrs 10800
CONST UNLOCK_CUBE_BOMB_TIMEOUT = 3; //6hrs 21600
CONST UNLOCK_CUBE_ROCKET_TIMEOUT = 6; //9hrs 32400
CONST UNLOCK_CUBE_DYNAMITE_TIMEOUT = 12; //12hrs 43200 - 1hr for testing
CONST UNLOCK_CUBE_METALBOMB_TIMEOUT = 24; //24hrs 86400
CONST CIRCLET_COUNT = 10; //circlet count to give bronze reward.

CONST CUBE_ACTIVE = 1;
CONST CUBE_ON_PROCESS = 2;
CONST CUBE_CAN_BE_CLAIMED = 3;

CONST RANDOM_MAX_CARD_COUNT = 4;

CONST COPPER_CUBE_CRYSTAL_COUNT = 5;
CONST BRONZE_CUBE_CRYSTAL_COUNT = 10;
CONST BRONZE_CUBE_COMMON_CARD_COUNT = 1;
CONST BRONZE_CUBE_CIRCLET_COUNT_TO_REWARD = 10;

CONST NOTIFICATION_TYPE_COPPER_REWARD = 1;
CONST NOTIFICATION_TYPE_CUBE_UNLOCK = 2;
CONST NOTIFICATION_TYPE_USER_INACTIVE = 3;
CONST NOTIFICATION_TYPE_INVITE_ACCEPTED = 4;
CONST INACTIVITY_ONE_HOUR_TIMEOUT = 3600;//1hrs
CONST INACTIVITY_ONE_DAY_TIMEOUT = 86400;//24hrs
CONST INACTIVITY_NONE = 0;

CONST CONTENT_TYPE_USER = 1;
CONST SEARCH_OPPONENT = 1;
CONST CANCEL_SEARCH = 2;

//Achievement related constant.
CONST ACHIEVEMENT_TYPE_TOTAL_WIN = 1;
CONST ACHIEVEMENT_TYPE_CONTINUOUS_WIN = 2;
CONST ACHIEVEMENT_TYPE_CUBE = 3;
CONST ACHIEVEMENT_TYPE_RELIC_COUNT = 4;
CONST ACHIEVEMENT_TYPE_STADIUM = 5;
CONST ACHIEVEMENT_TYPE_CARD_UNLOCK = 6;
CONST ACHIEVEMENT_TYPE_TUTORIAL_COMPLETED = 7;
CONST ACHIEVEMENT_TYPE_ALL_CARD_UNLOCK = 8;

CONST MIN_CUBE_REWARD = 4;

CONST KINGDOM_GOLD_REQUIRED=500;

CONST CRYSTAL_INVENTORY = 1;
CONST GOLD_INVENTORY = 2;

CONST DEFAULT_GOLD = 200;
CONST DEFAULT_CRYSTAL = 100;

CONST AI_NAMES = array("John", "Steve", "Michelle", "Lilly", "Harry", "Ron", "Priyanka", "Henry", "Jose", "Amigo", "Amir", "Becky", "Katy", "Hugh", "Amber");

CONST AI_DECK_NORMAL = 1;
CONST AI_DECK_DIFFICULT = 2;

CONST NORMAL_AI_DECK = array(1,2,3,6,7);
CONST DIFFICULT_AI_DECK = array(3,4,5,8,9);

CONST DAILY_REWARD_TYPE_INVENTORY = 1;
CONST DAILY_REWARD_TYPE_CARD = 2;
CONST DAILY_REWARD_TYPE_CUBE = 3;

CONST SHOP_CARD_COUNT = 3;
//CONST CUBE_LIST = array(CUBE_TITANIUM => "Gold Cube", CUBE_DIAMOND => "Diamond Cube", CUBE_PLATINUM => "Platinum Cube");
CONST CUBE_LIST = array(CUBE_FIRECRACKER => "Fire Cracker", CUBE_BOMB => "Bomb", CUBE_ROCKET => "Rocket", CUBE_METALBOMB => "Metal Bomb", CUBE_DYNAMITE => "Dynamite");
CONST DAILY_REWARD_NEXT_DAY = 24*60*60;
CONST DECK_COUNT = 4;
 
CONST TRAINING_CAMP = 1;
CONST MONKEY_STADIUM = 2;
CONST UNDEAD = 3;

CONST MIN_CARD_COUNT = 0;
 
CONST ROOM_TYPE_NORMAL = 1;
CONST ROOM_TYPE_INVITE = 2;
CONST ROOM_TYPE_BATTLE = 3;
CONST INVITE_LINK_TIME_OUT_TIME =20*60;
CONST MAX_INVITE_PER_HOUR = 5;
?>