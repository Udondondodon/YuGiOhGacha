<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Card;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Card::create([
            'title' => 'Time Wizard',
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/3/33/TimeWizard-LDK2-EN-C-1E.png',
            'lore' => 'Once per turn: You can toss a coin and call it. If you call it right, destroy all monsters your opponent controls. If you call it wrong, destroy as many monsters you control as possible, and if you do, take damage equal to half the total ATK those destroyed monsters had on the field.',
        ]);

        Card::create([
            'title' => 'Flame Swordsman',
            'image' => 'https://vignette4.wikia.nocookie.net/yugioh/images/1/15/FlameSwordsman-MIL1-EN-R-1E.png',
            'lore' => '\ Flame Manipulator\  + \ Masaki the Legendary Swordsman\ ',
        ]);

        Card::create([
            'title' => 'Gilford the Lightning',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/d/d9/GilfordtheLightning-MIL1-EN-C-1E.png',
            'lore' => 'You can Tribute 3 monsters to Tribute Summon (but not Set) this card. If Summoned this way: Destroy all monsters your opponent controls.',
        ]);

        Card::create([
            'title' => 'Gearfried the Iron Knight',  
            'image' => 'https://vignette4.wikia.nocookie.net/yugioh/images/1/1c/GearfriedtheIronKnight-LDK2-EN-C-1E.png',
            'lore' => 'When an Equip Card(s) is equipped to this card: Destroy that Equip Card(s).',
        ]);

        Card::create([
            'title' => 'Blue-Eyes White Dragon',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/d/d4/BlueEyesWhiteDragon-DUSA-EN-UR-1E.png',
            'lore' => 'This legendary dragon is a powerful engine of destruction. Virtually invincible, very few have faced this awesome creature and lived to tell the tale.',
        ]);

        Card::create([
            'title' => 'Dark Magician',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/8/85/DarkMagician-DUSA-EN-UR-1E.png',
            'lore' => 'The ultimate wizard in terms of attack and defense.',
        ]);

        Card::create([
            'title' => 'Red-Eyes Archfiend of Lightning',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/9/97/RedEyesArchfiendofLightning-LDK2-EN-C-1E.png',
            'lore' => 'This card is treated as a Normal Monster while face-up on the field or in the Graveyard. While this card is a Normal Monster on the field, you can Normal Summon it to have it become an Effect Monster with this effect.',
        ]);

        Card::create([
            'title' => 'Dark Magician Girl',  
            'image' => 'https://vignette4.wikia.nocookie.net/yugioh/images/f/f2/DarkMagicianGirl-MVP1-EN-GUR-1E.png',
            'lore' => 'This card gains 300 ATK for every \Dark Magician\ or \Magician of Black Chaos\ in either player Graveyard.',
        ]);

        Card::create([
            'title' => 'Decode Talker',  
            'image' => 'https://ms.yugipedia.com//thumb/f/f0/DecodeTalker-DUDE-EN-UR-1E.png/450px-DecodeTalker-DUDE-EN-UR-1E.png',
            'lore' => 'Link 3 - Effect Monsters - min. 2 This card gains 500 ATK for each monster linked to it. During either player turn, when your opponent activates a card or effect that targets a card(s) you control: You can Tribute 1 monster linked to this card; negate the activation, and if you do, destroy that card.',
        ]);

        Card::create([
            'title' => 'Summoned Skull',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/7/7f/SummonedSkull-MIL1-EN-C-1E.png',
            'lore' => 'A fiend with dark powers for confusing the enemy. Among the Fiend-Type monsters, this monster boasts considerable force.',
        ]);

        Card::create([
            'title' => 'Stardust Dragon',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/b/bf/StardustDragon-LC5D-EN-UR-1E.png',
            'lore' => '1 Tuner + 1 or more non-Tuner monsters /During either player s turn, when a card or effect is activated that would destroy a card(s) on the field: You can Tribute this card; negate the activation, and if you do, destroy it. During the End Phase, if this effect was activated this turn (and was not negated): You can Special Summon this card from your Graveyard.',
        ]);

        Card::create([
            'title' => 'Kuriboh',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/9/90/Kuriboh-SDMY-EN-C-1E.png',
            'lore' => 'During your opponent s turn, at damage calculation: You can discard this card; you take no battle damage from that battle (this is a Quick Effect).',
        ]);

        Card::create([
            'title' => 'Black Luster Soldier',  
            'image' => 'https://vignette4.wikia.nocookie.net/yugioh/images/3/3f/BlackLusterSoldier-YGLD-EN-C-1E.png',
            'lore' => 'You can Ritual Summon this card with \ Black Luster Ritual\ .',
        ]);

        Card::create([
            'title' => 'Silent Swordsman',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/1/16/SilentSwordsman-DPRP-EN-UR-1E.png',
            'lore' => 'Cannot be Normal Summoned/Set. Must be Special Summoned (from your hand) by Tributing 1 Warrior-Type monster, and cannot be Special Summoned by other ways. Once per turn, during the Standby Phase: This card gains 500 ATK. Once per turn, during either player s turn, when a Spell Card is activated: You can negate the activation. If this card is destroyed by battle, or if this card in its owner s control is destroyed by an opponent s card effect: You can Special Summon 1 \ Silent Swordsman\  monster from your hand or Deck, except \ Silent Swordsman\ , ignoring its Summoning conditions.',
        ]);

        Card::create([
            'title' => 'Silent Magician',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/6/6e/SilentMagician-DPRP-EN-UR-1E.png',
            'lore' => 'Cannot be Normal Summoned/Set. Must be Special Summoned (from your hand) by Tributing 1 Spellcaster-Type monster, and cannot be Special Summoned by other ways. This card gains 500 ATK for each card in your hand. Once per turn, during either player s turn, when a Spell Card is activated: You can negate the activation. If this card is destroyed by battle, or if this card in its owner s control is destroyed by an opponent s card effect: You can Special Summon 1 \ Silent Magician\  monster from your hand or Deck, except \ Silent Magician\ , ignoring its Summoning conditions.',
        ]);

        Card::create([
            'title' => 'Gandora the Dragon of Destruction',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/a/a2/GandoratheDragonofDestruction-MIL1-EN-C-1E.png',
            'lore' => 'Cannot be Special Summoned. You can pay half your LP; destroy as many cards on the field as possible (other than this card), and if you do, banish them. This card gains 300 ATK for each card destroyed this way. Once per turn, during the End Phase, if this card was Normal or Flip Summoned this turn: Send it to the Graveyard.',
        ]);

        Card::create([
            'title' => 'Blue-Eyes Ultimate Dragon',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/d/dc/BlueEyesUltimateDragon-LDK2-EN-UR-1E.png',
            'lore' => '\ Blue-Eyes White Dragon\  + \ Blue-Eyes White Dragon\  + \ Blue-Eyes White Dragon\ ',
        ]);

        Card::create([
            'title' => 'Obelisk the Tormentor',  
            'image' => 'https://vignette4.wikia.nocookie.net/yugioh/images/d/d9/ObelisktheTormentor-MVPC-EN-GScR-LE.png',
            'lore' => 'Requires 3 Tributes to Normal Summon (cannot be Normal Set). This card s Normal Summon cannot be negated. When Normal Summoned, cards and effects cannot be activated. Cannot be targeted by Spells, Traps, or card effects. Once per turn, during the End Phase, if this card was Special Summoned: Send it to the Graveyard. You can Tribute 2 monsters; destroy all monsters your opponent controls. This card cannot declare an attack the turn this effect is activated.',
        ]);

        Card::create([
            'title' => 'Slifer the Sky Dragon',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/0/04/SlifertheSkyDragon-MVP1-EN-GUR-1E.png',
            'lore' => 'Requires 3 Tributes to Normal Summon (cannot be Normal Set). This card s Normal Summon cannot be negated. When Normal Summoned, cards and effects cannot be activated. Once per turn, during the End Phase, if this card was Special Summoned: Send it to the Graveyard. This card gains 1000 ATK and DEF for each card in your hand. If a monster(s) is Normal or Special Summoned to your opponent s field in face-up Attack Position: That monster(s) loses 2000 ATK, then if its ATK has been reduced to 0 as a result, destroy it.',
        ]);

        Card::create([
            'title' => 'The Winged Dragon of Ra',  
            'image' => 'https://vignette4.wikia.nocookie.net/yugioh/images/c/c5/TheWingedDragonofRa-LDK2-EN-UR-LE.png',
            'lore' => 'Cannot be Special Summoned. Requires 3 Tributes to Normal Summon (cannot be Normal Set). This card s Normal Summon cannot be negated. When Normal Summoned, other cards and effects cannot be activated. When this card is Normal Summoned: You can pay LP so that you only have 100 left; this card gains ATK and DEF equal to the amount of LP paid. You can pay 1000 LP, then target 1 monster on the field; destroy that target.',
        ]);

        Card::create([
            'title' => 'Magician of Faith',  
            'image' => 'https://vignette4.wikia.nocookie.net/yugioh/images/9/95/MagicianofFaith-DUSA-EN-UR-1E.png',
            'lore' => 'FLIP: Target 1 Spell Card in your Graveyard; add that target to your hand.',
        ]);

        Card::create([
            'title' => 'Maha Vailo',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/6/6c/MahaVailo-YS15-EU-C-1E.png',
            'lore' => 'This card gains 500 ATK for each Equip Card equipped to this card.',
        ]);

        Card::create([
            'title' => 'Fire Sorcerer',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/8/8d/FireSorcerer-LON-EN-C-UE.jpg',
            'lore' => 'FLIP: Randomly select 2 cards from your hand and remove them from play to inflict 800 points of damage to your opponent s Life Points.',
        ]);

        Card::create([
            'title' => 'Change of Heart',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/2/21/ChangeofHeart-LCYW-EN-ScR-1E.png',
            'lore' => 'Target 1 monster your opponent controls; take control of it until the End Phase.',
        ]);

        Card::create([
            'title' => 'Headless Knight',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/c/ce/HeadlessKnight-DB1-EN-C-UE.png',
            'lore' => '  A haunted spirit of a falsely accused knight who wanders in search of truth and justice.  ',
        ]);

        Card::create([
            'title' => 'The Earl of Demise',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/6/62/TheEarlofDemise-DB1-EN-C-UE.png',
            'lore' => '  This gentlemanly creature is extremely wicked, feared by man and fiend alike.  ',
        ]);

        Card::create([
            'title' => 'Dark Necrofear',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/7/70/DarkNecrofear-DPRP-EN-C-1E.png',
            'lore' => 'Cannot be Normal Summoned/Set. Must first be Special Summoned (from your hand) by banishing 3 Fiend-Type monsters from your Graveyard. During the End Phase, if this card is in the Graveyard because it was destroyed by an opponent s card this turn (by battle or card effect) and sent to your Graveyard while it was a Monster Card under your control: Target 1 face-up monster your opponent controls; equip this card to that target. While this card is equipped to a monster by this effect, take control of that monster.',
        ]);

        Card::create([
            'title' => 'Destiny Board',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/c/c7/DestinyBoard-DPRP-EN-C-1E.png',
            'lore' => 'When this card and all 4 \ Spirit Message\  cards with different names are placed on your field, you win the Duel. Once per turn, during your opponent s End Phase: Place 1 \ Spirit Message\  card from your hand or Deck in your Spell \u0026 Trap Zone face-up, in the proper order of \ I\ , \ N\ , \ A\ , and \ L\ . When any \ Spirit Message\  card or \ Destiny Board\  you control leaves the field, send all \ Spirit Message\  cards and \ Destiny Board\  you control to the Graveyard.',
        ]);

        Card::create([
            'title' => 'Revival Jam',  
            'image' => 'https://vignette4.wikia.nocookie.net/yugioh/images/b/b8/RevivalJam-LCJW-EN-C-1E.png',
            'lore' => 'When this card is destroyed by battle and sent to the Graveyard: You can pay 1000 Life Points; Special Summon it in face-up Defense Position during your next turn s Standby Phase.',
        ]);

        Card::create([
            'title' => 'Temple of the Kings',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/f/f5/TempleoftheKings-DPRP-EN-C-1E.png',
            'lore' => 'You can activate 1 Trap Card the turn it was Set. You can send 1 \ Mystical Beast of Serket\  in your Monster Zone and this card you control to the Graveyard; Special Summon 1 monster from your hand or Deck, or 1 Fusion Monster from your Extra Deck. You can only use each effect of \ Temple of the Kings\  once per turn.',
        ]);

        Card::create([
            'title' => 'Mystical Beast of Serket',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/6/69/MysticalBeastofSerket-DPRP-EN-C-1E.png',
            'lore' => 'If you do not control \ Temple of the Kings\ , destroy this card. Banish any monster destroyed by battle with this card. If this card destroys a monster by battle: It gains 500 ATK.',
        ]);

        Card::create([
            'title' => 'Embodiment of Apophis',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/4/49/EmbodimentofApophis-DPBC-EN-R-1E.png',
            'lore' => 'During either player s Main Phase: Special Summon this card as a Normal Monster (Reptile-Type/EARTH/Level 4/ATK 1600/DEF 1800). (This card is also still a Trap Card.)',
        ]);

        Card::create([
            'title' => 'Slate Warrior',  
            'image' => 'https://vignette4.wikia.nocookie.net/yugioh/images/6/65/SlateWarrior-BP03-EN-R-1E.png',
            'lore' => 'FLIP: This card gains 500 ATK and DEF. /If this card is destroyed by battle: The monster that destroyed it loses 500 ATK and DEF.',
        ]);

        Card::create([
            'title' => 'Mudora',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/8/85/Mudora-BP03-EN-R-1E.png',
            'lore' => 'This card gains 200 ATK for each Fairy-Type monster in your Graveyard.',
        ]);

        Card::create([
            'title' => 'Zolga',  
            'image' => 'https://vignette4.wikia.nocookie.net/yugioh/images/4/4e/Zolga-BP02-EN-C-1E.png',
            'lore' => 'When a monster is Tribute Summoned by Tributing this card: The owner of this card gains 2000 Life Points.',
        ]);

        Card::create([
            'title' => 'Dunames Dark Witch',  
            'image' => 'https://vignette4.wikia.nocookie.net/yugioh/images/b/b0/DunamesDarkWitch-LCJW-EN-UR-1E.png',
            'lore' => '  Even when all odds are against this brave fairy, she will press onwards in battle and never retreat.  ',
        ]);

        Card::create([
            'title' => 'Blast Held by a Tribute',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/3/3a/BlastHeldbyaTribute-DPRP-EN-C-1E.png',
            'lore' => 'When an opponent s monster that was Tribute Summoned declares an attack: Destroy as many face-up Attack Position monsters they control as possible, and if you do, inflict 1000 damage to your opponent.',
        ]);

        Card::create([
            'title' => 'Exchange of the Spirit',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/0/03/ExchangeoftheSpirit-DPRP-EN-C-1E.png',
            'lore' => 'If both players have 15 or more cards in their Graveyards: Pay 1000 LP; each player swaps the cards in their Graveyard with the cards in their Deck, then shuffles their Deck. You can only activate 1 \ Exchange of the Spirit\  per Duel.',
        ]);

        Card::create([
            'title' => 'Great Moth',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/8/84/GreatMoth-DB2-EN-C-UE.png',
            'lore' => 'This monster cannot be Normal Summoned or Set. This card can only be Special Summoned by Tributing \ Petit Moth\  on the 4th of your turns after \ Petit Moth\  has been equipped with \ Cocoon of Evolution\ .',
        ]);

        Card::create([
            'title' => 'Perfectly Ultimate Great Moth',  
            'image' => 'https://vignette4.wikia.nocookie.net/yugioh/images/8/84/PerfectlyUltimateGreatMoth-DB2-EN-UR-UE.jpg',
            'lore' => 'This card cannot be Normal Summoned or Set. This monster can only be Special Summoned by Tributing \ Petit Moth\  on the 6th of your turns after \ Petit Moth\  has been equipped with \ Cocoon of Evolution\ .',
        ]);

        Card::create([
            'title' => 'Insect Queen',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/f/f3/InsectQueen-DPBC-EN-C-1E.png',
            'lore' => 'Cannot declare an attack unless you Tribute 1 monster. This card gains 200 ATK for each Insect-Type monster on the field. During the End Phase, if this card destroyed an opponent s monster by battle this turn: Special Summon 1 \ Insect Monster Token\  (Insect-Type/EARTH/Level 1/ATK 100/DEF 100) in Attack Position.',
        ]);

        Card::create([
            'title' => 'Two-Headed King Rex',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/0/01/TwoHeadedKingRex-LCJW-EN-C-1E.png',
            'lore' => 'A powerful monster whose two heads attack as one.',
        ]);

        Card::create([
            'title' => 'Sword Arm of Dragon',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/e/ee/SwordArmofDragon-LCJW-EN-C-1E.png',
            'lore' => '  This Jurrasic juggernaut has a spine covered in sword-like plates, and a tail to split open skulls.  ',
        ]);

        Card::create([
            'title' => 'Serpent Night Dragon',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/a/ab/SerpentNightDragon-LCJW-EN-C-1E.png',
            'lore' => 'A dragon created from the soul of a wicked knight.',
        ]);

        Card::create([
            'title' => 'Tyrant Dragon',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/9/9e/TyrantDragon-LCJW-EN-C-1E.png',
            'lore' => 'During your Battle Phase, if your opponent controls a monster after this card s first attack, this card can make a second attack. Negate any Trap effects that target this card, and if you do, destroy that Trap Card. This card cannot be Special Summoned from the Graveyard, unless you Tribute 1 Dragon-Type monster.',
        ]);

        Card::create([
            'title' => 'Umi',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/b/b2/Umi-DB1-EN-C-UE.png',
            'lore' => 'Increase the ATK and DEF of all Fish, Sea Serpent, Thunder, and Aqua-Type monsters by 200 points. Decrease the ATK and DEF of all Machine and Pyro-Type monsters by 200 points.',
        ]);

        Card::create([
            'title' => 'The Legendary Fisherman',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/c/c9/TheLegendaryFisherman-SP17-EN-C-1E.png',
            'lore' => 'While \ Umi\  is on the field, this card is unaffected by Spell effects and cannot be targeted for attacks, but does not prevent your opponent from attacking you directly.',
        ]);

        Card::create([
            'title' => 'Fortress Whale',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/1/18/FortressWhale-TP7-EN-SR-UE.png',
            'lore' => 'This monster can only be Ritual Summoned with the Ritual Spell Card, \ Fortress Whale s Oath\ .',
        ]);

        Card::create([
            'title' => 'Jinzo',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/e/ef/Jinzo-DUSA-EN-UR-1E.png',
            'lore' => 'Trap Cards, and their effects on the field, cannot be activated. Negate all Trap effects on the field.',
        ]);

        Card::create([
            'title' => 'Toon World',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/c/ce/ToonWorld-MIL1-EN-C-1E.png',
            'lore' => 'Activate this card by paying 1000 LP.',
        ]);

        Card::create([
            'title' => 'Relinquished',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/3/3c/Relinquished-MIL1-EN-C-1E.png',
            'lore' => 'You can Ritual Summon this card with \ Black Illusion Ritual\ . Once per turn: You can target 1 monster your opponent controls; equip that target to this card. (You can only equip 1 monster at a time to this card with this effect.) This card s ATK and DEF become equal to that equipped monster s. If this card would be destroyed by battle, destroy that equipped monster instead. While equipped with that monster, any battle damage you take from battles involving this card inflicts equal effect damage to your opponent.',
        ]);

        Card::create([
            'title' => 'Thousand-Eyes Restrict',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/a/af/ThousandEyesRestrict-DPRP-EN-R-1E.png',
            'lore' => '\ Relinquished\  + \ Thousand-Eyes Idol\  /Other monsters on the field cannot change their battle positions or attack. Once per turn: You can target 1 monster your opponent controls; equip that target to this card. (You can only equip 1 monster at a time to this card with this effect.) This card s ATK and DEF become equal to that equipped monster s. If this card would be destroyed by battle, destroy that equipped monster instead.',
        ]);

        Card::create([
            'title' => 'Gate Guardian',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/0/03/GateGuardian-LCJW-EN-C-1E.png',
            'lore' => 'Cannot be Normal Summoned/Set. Must first be Special Summoned (from your hand) by Tributing 1 \ Sanga of the Thunder\ , \ Kazejin\ , and \ Suijin\ .',
        ]);

        Card::create([
            'title' => 'Labyrinth Wall',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/e/e4/LabyrinthWall-LCJW-EN-C-1E.png',
            'lore' => 'These walls form a labyrinth with no exit for enemies.',
        ]);

        Card::create([
            'title' => 'Barrel Dragon',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/7/7f/BarrelDragon-DPBC-EN-R-1E.png',
            'lore' => 'Once per turn: You can target 1 monster your opponent controls; toss a coin 3 times and destroy it if at least 2 of the results are Heads.',
        ]);

        Card::create([
            'title' => 'Slot Machine',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/1/1b/SlotMachine-LCJW-EN-C-1E.png',
            'lore' => 'The machine s ability is said to vary according to its slot results.',
        ]);

        Card::create([
            'title' => '7 Completed',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/e/ec/7Completed-BP03-EN-C-1E.png',
            'lore' => 'Activate this card by choosing ATK or DEF; equip only to a Machine-Type monster. It gains 700 ATK or DEF, depending on the choice.',
        ]);

        Card::create([
            'title' => 'The Masked Beast',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/1/1e/TheMaskedBeast-DPBC-EN-R-1E.png',
            'lore' => 'You can Ritual Summon this card with \ Curse of the Masked Beast\ .',
        ]);

        Card::create([
            'title' => 'Exodia the Forbidden One',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/d/dc/ExodiatheForbiddenOne-LDK2-EN-C-1E.png',
            'lore' => 'If you have \ Right Leg of the Forbidden One\ , \ Left Leg of the Forbidden One\ , \ Right Arm of the Forbidden One\  and \ Left Arm of the Forbidden One\  in addition to this card in your hand, you win the Duel.',
        ]);

        Card::create([
            'title' => 'Left Arm of the Forbidden One',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/6/6b/LeftArmoftheForbiddenOne-LDK2-EN-C-1E.png',
            'lore' => 'A forbidden left arm sealed by magic. Whosoever breaks this seal will know infinite power.',
        ]);

        Card::create([
            'title' => 'Right Arm of the Forbidden One',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/1/11/RightArmoftheForbiddenOne-LDK2-EN-C-1E.png',
            'lore' => 'A forbidden right arm sealed by magic. Whosoever breaks this seal will know infinite power.',
        ]);

        Card::create([
            'title' => 'Right Leg of the Forbidden One',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/f/f1/RightLegoftheForbiddenOne-LDK2-EN-C-1E.png',
            'lore' => 'A forbidden right leg sealed by magic. Whosoever breaks this seal will know infinite power.',
        ]);

        Card::create([
            'title' => 'Left Leg of the Forbidden One',  
            'image' => 'https://vignette4.wikia.nocookie.net/yugioh/images/f/f5/LeftLegoftheForbiddenOne-LDK2-EN-C-1E.png',
            'lore' => 'A forbidden left leg sealed by magic. Whosoever breaks this seal will know infinite power.',
        ]);

        Card::create([
            'title' => 'Polymerization',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/3/30/Polymerization-SDMY-EN-C-1E.png',
            'lore' => 'Fusion Summon 1 Fusion Monster from your Extra Deck, using monsters from your hand or field as Fusion Materials.',
        ]);

        Card::create([
            'title' => 'Winged Kuriboh',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/c/cd/WingedKuriboh-SDHS-EN-C-1E.png',
            'lore' => 'If this card on the field is destroyed and sent to the Graveyard: For the rest of this turn, you take no battle damage.',
        ]);

        Card::create([
            'title' => 'Elemental HERO Flame Wingman',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/d/dd/ElementalHEROFlameWingman-RYMP-EN-R-1E.png',
            'lore' => '\ Elemental HERO Avian\  + \ Elemental HERO Burstinatrix\  /Must be Fusion Summoned and cannot be Special Summoned by other ways. When this card destroys a monster by battle and sends it to the Graveyard: Inflict damage to your opponent equal to the ATK of the destroyed monster in the Graveyard.',
        ]);

        Card::create([
            'title' => 'Elemental HERO Neos',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/5/5e/ElementalHERONeos-SDHS-EN-C-1E.png',
            'lore' => 'A new Elemental HERO has arrived from Neo-Space! When he initiates a Contact Fusion with a Neo-Spacian his unknown powers are unleashed.',
        ]);

        Card::create([
            'title' => 'Super Polymerization',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/9/9f/SuperPolymerization-SDCR-EN-C-1E.png',
            'lore' => 'Discard 1 card; Fusion Summon 1 Fusion Monster from your Extra Deck, using monsters from either side of the field as Fusion Materials. Cards and effects cannot be activated in response to this card s activation.',
        ]);

        Card::create([
            'title' => 'Ojama Yellow',  
            'image' => 'https://vignette4.wikia.nocookie.net/yugioh/images/b/b4/OjamaYellow-DT01-EN-DNPR-DT.png',
            'lore' => 'He s one of the Ojama Trio. It s said that he butts in by any means necessary. It s also said that when the three are together, something happens.',
        ]);

        Card::create([
            'title' => 'Armed Dragon LV7',  
            'image' => 'https://vignette4.wikia.nocookie.net/yugioh/images/6/6e/ArmedDragonLV7-LCYW-EN-C-1E.png',
            'lore' => 'Cannot be Normal Summoned/Set. Must be Special Summoned by \ Armed Dragon LV5\ , and cannot be Special Summoned by other ways. You can send 1 monster from your hand to the Graveyard; destroy all face-up monsters your opponent controls with ATK less than or equal to the sent monster s ATK.',
        ]);

        Card::create([
            'title' => 'Cyber Blader',  
            'image' => 'https://vignette4.wikia.nocookie.net/yugioh/images/4/46/CyberBlader-DR04-NA-R-UE.png',
            'lore' => '\ Etoile Cyber\  + \ Blade Skater\  /A Fusion Summon of this card can only be conducted with the above Fusion Material Monsters. While your opponent controls only 1 monster, this card cannot be destroyed by battle. While your opponent controls only 2 monsters, double this card s ATK. While your opponent controls only 3 monsters, negate the effects of your opponent s Spell, Trap, and Effect Monsters.',
        ]);

        Card::create([
            'title' => 'Cyber Tutu',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/2/24/CyberTutu-DR04-NA-C-UE.png',
            'lore' => 'If the ATK of each monster your opponent controls is higher than the ATK of this card, this card can attack your opponent directly.',
        ]);

        Card::create([
            'title' => 'Cyber Angel Benten',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/d/da/CyberAngelBenten-DRL3-EN-ScR-1E.png',
            'lore' => 'You can Ritual Summon this card with \ Machine Angel Ritual\ . If this card destroys a monster by battle and sends it to the Graveyard: Inflict damage to your opponent equal to that monster s original DEF in the Graveyard. If this card is Tributed: You can add 1 LIGHT Fairy-Type monster from your Deck to your hand.',
        ]);

        Card::create([
            'title' => 'Junk Warrior',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/0/06/JunkWarrior-SDSE-EN-C-1E.png',
            'lore' => '\ Junk Synchron\  + 1 or more non-Tuner monsters /If this card is Synchro Summoned: It gains ATK equal to the total ATK of all Level 2 or lower monsters you currently control.',
        ]);

        Card::create([
            'title' => 'Majestic Star Dragon',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/5/59/MajesticStarDragon-LC5D-EN-SR-1E.png',
            'lore' => '\ Majestic Dragon\  + \ Stardust Dragon\  + 1 non-Tuner monster /During either player s turn, when your opponent activates a card or effect: You can Tribute this card; negate the activation, and if you do, destroy all cards your opponent controls. Once per turn: You can target 1 face-up monster your opponent controls; negate its effects until the end of this turn, and you can activate 1 of its effects as this card s effect once this turn. During the End Phase: Target 1 \ Stardust Dragon\  in your Graveyard; return this card from the field to the Extra Deck, then Special Summon that target.',
        ]);

        Card::create([
            'title' => 'Shooting Quasar Dragon',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/8/8b/ShootingQuasarDragon-LC05-EN-UR-LE.png',
            'lore' => '1 Tuner Synchro Monster + 2 or more non-Tuner Synchro Monsters /Must be Synchro Summoned, and cannot be Special Summoned by other ways. This card s maximum number of attacks per Battle Phase equals the number of non-Tuner monsters used as its Synchro Material. Once per turn, during either player s turn, when a card or effect is activated: You can negate the activation, and if you do, destroy it. When this card leaves the field: You can Special Summon 1 \ Shooting Star Dragon\  from your Extra Deck.',
        ]);

        Card::create([
            'title' => 'Shooting Star Dragon',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/f/fb/ShootingStarDragon-LC5D-EN-SR-1E.png',
            'lore' => '1 Tuner Synchro Monster + \ Stardust Dragon\  /Once per turn: You can excavate the top 5 cards of your Deck, shuffle them back in, also this card s maximum number of attacks per Battle Phase this turn equals the number of Tuner monsters excavated. Once per turn, during either player s turn, when a card or effect is activated that would destroy a card(s) on the field: You can negate the effect, and if you do, destroy it. Once per turn, when an opponent s monster declares an attack: You can target the attacking monster; banish this card, and if you do, negate that attack. During the next End Phase: Special Summon this card banished by this effect.',
        ]);

        Card::create([
            'title' => 'Red Dragon Archfiend',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/2/27/RedDragonArchfiend-HSRD-EN-C-1E.png',
            'lore' => '1 Tuner + 1 or more non-Tuner monsters /After damage calculation, if this card attacks a Defense Position monster your opponent controls: Destroy all Defense Position monsters your opponent controls. During your End Phase: Destroy all other monsters you control that did not declare an attack this turn. This card must be face-up on the field to activate and to resolve this effect.',
        ]);

        Card::create([
            'title' => 'Majestic Red Dragon',  
            'image' => 'https://vignette4.wikia.nocookie.net/yugioh/images/c/c0/MajesticRedDragon-LC5D-EN-SR-1E.png',
            'lore' => '\ Majestic Dragon\  + \ Red Dragon Archfiend\  + 1 non-Tuner monster /Cannot be destroyed by card effects. After damage calculation, if this card attacks: Destroy all Defense Position monsters on the field. Once per turn: You can target 1 face-up monster your opponent controls; negate its effects, and if you do, this card gains ATK equal to that monster s ATK. These changes last until the end of this turn. During the End Phase: Target 1 \ Red Dragon Archfiend\  in your Graveyard; return this card from the field to the Extra Deck, then Special Summon that target.',
        ]);

        Card::create([
            'title' => 'Red Nova Dragon',  
            'image' => 'https://vignette4.wikia.nocookie.net/yugioh/images/2/2a/RedNovaDragon-HSRD-EN-R-1E.png',
            'lore' => '2 Tuners + \ Red Dragon Archfiend\  /This card gains 500 ATK for each Tuner monster in your Graveyard. Cannot be destroyed by an opponent s card effects. When an opponent s monster declares an attack: You can target the attacking monster; banish this card, and if you do, negate that attack. During the next End Phase: Special Summon this card banished by this effect.',
        ]);

        Card::create([
            'title' => 'Black Rose Dragon',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/9/93/BlackRoseDragon-DUSA-EN-UR-1E.png',
            'lore' => '1 Tuner + 1 or more non-Tuner monsters /When this card is Synchro Summoned: You can destroy all cards on the field. Once per turn: You can banish 1 Plant-Type monster from your Graveyard, then target 1 Defense Position monster your opponent controls; change that target to face-up Attack Position, and if you do, its ATK becomes 0 until the end of this turn.',
        ]);

        Card::create([
            'title' => 'Ancient Fairy Dragon',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/b/be/AncientFairyDragon-LC5D-EN-C-1E.png',
            'lore' => '1 Tuner + 1 or more non-Tuner monsters /Once per turn: You can Special Summon 1 Level 4 or lower monster from your hand. You cannot conduct your Battle Phase the turn you activate this effect. Once per turn: You can destroy as many Field Spell Cards on the field as possible, and if you do, gain 1000 LP, then you can add 1 Field Spell Card from your Deck to your hand.',
        ]);

        Card::create([
            'title' => 'Black-Winged Dragon',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/f/f8/BlackWingedDragon-LC5D-EN-C-1E.png',
            'lore' => '1 Tuner + 1 or more non-Tuner monsters /If you would take damage from a card effect, place 1 Black Feather Counter on this card instead. This card loses 700 ATK for each Black Feather Counter on it. Once per turn: You can remove all Black Feather Counters on this card, then target 1 face-up monster your opponent controls; that target loses 700 ATK for each Black Feather Counter you removed, and if it does, inflict damage to your opponent equal to the ATK lost by this effect.',
        ]);

        Card::create([
            'title' => 'Monster Reborn',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/f/fb/MonsterReborn-YGLD-EN-C-1E-C.png',
            'lore' => 'Target 1 monster in either player s Graveyard; Special Summon it.',
        ]);

        Card::create([
            'title' => 'Pot of Greed',  
            'image' => 'https://vignette4.wikia.nocookie.net/yugioh/images/f/f2/PotofGreed-YGLD-EN-C-1E.png',
            'lore' => 'Draw 2 cards.',
        ]);

        Card::create([
            'title' => 'Mirror Force',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/6/6b/MirrorForce-DUSA-EN-UR-1E.png',
            'lore' => 'When an opponent s monster declares an attack: Destroy all Attack Position monsters your opponent controls.',
        ]);

        Card::create([
            'title' => 'Power Tool Dragon',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/d/d0/PowerToolDragon-LC5D-EN-C-1E.png',
            'lore' => '1 Tuner + 1 or more non-Tuner monsters /Once per turn: You can reveal 3 Equip Spell Cards from your Deck, then your opponent randomly adds 1 of them to your hand, and you shuffle the rest back into your Deck. If this card would be destroyed while equipped with an Equip Spell Card(s), you can send 1 of those cards to the Graveyard instead.',
        ]);

        Card::create([
            'title' => 'Life Stream Dragon',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/3/33/LifeStreamDragon-LC5D-EN-C-1E.png',
            'lore' => '1 Tuner + \ Power Tool Dragon\  /When this card is Synchro Summoned: You can make your LP become 4000. You take no effect damage. If this face-up card on the field would be destroyed, you can banish 1 Equip Spell Card from your Graveyard instead.',
        ]);

        Card::create([
            'title' => 'Montage Dragon',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/d/dd/MontageDragon-BPW2-NA-C-1E.png',
            'lore' => 'Cannot be Normal Summoned/Set. Must be Special Summoned (from your hand) by sending 3 other monsters from your hand to the Graveyard, and cannot be Special Summoned by other ways. This card s ATK becomes the combined original Levels of the sent monsters x 300.',
        ]);

        Card::create([
            'title' => 'Number 39: Utopia',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/6/6a/Number39Utopia-YS13-EN-SR-1E.png',
            'lore' => '2 Level 4 monsters /When any player s monster declares an attack: You can detach 1 Xyz Material from this card; negate the attack. When this card is targeted for an attack, while it has no Xyz Materials: Destroy this card.',
        ]);

        Card::create([
            'title' => 'Number 32: Shark Drake',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/7/76/Number32SharkDrake-PGLD-EN-GUR-1E.png',
            'lore' => '3 Level 4 monsters /Once per turn, when this attacking card destroys an opponent s monster by battle and sends it to the Graveyard: You can detach 1 Xyz Material from this card; Special Summon the destroyed monster to your opponent s side of the field in face-up Attack Position, also it loses 1000 ATK, and if you do Summon this way, this card can make a second attack during this Battle Phase.',
        ]);

        Card::create([
            'title' => 'Galaxy-Eyes Photon Dragon',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/7/74/GalaxyEyesPhotonDragon-PGLD-EN-GUR-1E.png',
            'lore' => 'You can Special Summon this card (from your hand) by Tributing 2 monsters with 2000 or more ATK. During either player s Battle Step, when this card battles an opponent s monster: You can target the monster this card is battling; banish both the opponent s monster and this card. At the end of the Battle Phase, return any monsters banished by this effect to the field, and if the other monster was an Xyz Monster, this card gains 500 ATK for each Xyz Material it had when it was banished.',
        ]);

        Card::create([
            'title' => 'Neo Galaxy-Eyes Photon Dragon',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/d/d1/NeoGalaxyEyesPhotonDragon-GAOV-EN-UR-1E.png',
            'lore' => '3 Level 8 monsters /When this card is Xyz Summoned using \ Galaxy-Eyes Photon Dragon\  as any of its Materials: Negate the effects of all other face-up cards currently on the field. Once per turn: You can detach 1 Xyz Material from this card; detach all Xyz Materials from monsters your opponent controls, then this card gains 500 ATK for each, also it can attack up to that many times during each Battle Phase this turn.',
        ]);

        Card::create([
            'title' => 'Odd-Eyes Dragon',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/8/8a/OddEyesDragon-YS15-EU-C-1E.png',
            'lore' => 'If this card destroys an opponent s monster by battle and sends it to the Graveyard: Inflict damage to your opponent equal to half the original ATK of that monster in the Graveyard.',
        ]);

        Card::create([
            'title' => 'Odd-Eyes Raging Dragon',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/2/2e/OddEyesRagingDragon-RATE-EN-UR-1E.png',
            'lore' => '2 Level 7 Dragon-Type monsters /If you can Pendulum Summon Level 7, you can Pendulum Summon this face-up card in your Extra Deck. If this card in the Monster Zone is destroyed: You can place it in your Pendulum Zone. If this card is Xyz Summoned using an Xyz Monster as Material, it gains these effects. /● It can make a second attack during each Battle Phase. /● Once per turn: You can detach 1 Xyz Material from it; destroy as many cards your opponent controls as possible, and if you do, this card gains 200 ATK for each, until the end of this turn.',
        ]);

        Card::create([
            'title' => 'Odd-Eyes Venom Dragon',  
            'image' => 'https://static.wikia.nocookie.net/yugioh/images/f/fe/OddEyesVenomDragon-BLLR-EN-ScR-1E.png',
            'lore' => '1 \ Starving Venom\  monster + 1 \ Odd-Eyes\  monster /Must be either Fusion Summoned or Pendulum Summoned, and cannot be Special Summoned by other ways. Once per turn: You can target 1 face-up monster your opponent controls; until the End Phase, this card gains ATK equal to that monster s current ATK, this card s name becomes that monster s original name, and replace this effect with that monster s original effect. If this card in the Monster Zone is destroyed: You can Special Summon 1 card from your Pendulum Zone, and if you do, place this card in your Pendulum Zone.',
        ]);

        Card::create([
            'title' => 'Bloom Diva the Melodious Choir',  
            'image' => 'https://vignette3.wikia.nocookie.net/yugioh/images/c/cf/BloomDivatheMelodiousChoir-SP17-EN-C-1E.png',
            'lore' => '1 \ Melodious Maestra\  monster + 1 \ Melodious\  monster /Cannot be destroyed by battle or card effects, also you take no battle damage from attacks involving this card. If this card battles a Special Summoned monster, after damage calculation: You can inflict damage to your opponent equal to the difference between the original ATK of that opponent s monster and this card, and if you do, destroy that opponent s monster.',
        ]);

        Card::create([
            'title' => 'Superheavy Samurai Big Benkei',  
            'image' => 'https://vignette4.wikia.nocookie.net/yugioh/images/2/29/SuperheavySamuraiBigBenkei-MP15-EN-R-1E.png',
            'lore' => 'When this card is Normal or Special Summoned: You can change its battle position. \ Superheavy Samurai\  monsters you control can attack while in face-up Defense Position. If they do, apply their DEF for damage calculation.',
        ]);

        Card::create([
            'title' => 'D/D/D Doom King Armageddon',  
            'image' => 'https://vignette2.wikia.nocookie.net/yugioh/images/9/9b/DDDDoomKingArmageddon-SDPD-EN-C-1E.png',
            'lore' => 'Once per turn, if a monster(s) you control is destroyed by battle or card effect: You can target 1 of those monsters; this card gains ATK equal to that monster s original ATK until the end of this turn. This card cannot attack your opponent directly during the turn this effect is activated. Cannot be destroyed by Spell/Trap effects that do not target this card.',
        ]);

        Card::create([
            'title' => 'Abyss Actor - Superstar',  
            'image' => 'https://vignette1.wikia.nocookie.net/yugioh/images/6/64/AbyssActorSuperstar-DESO-EN-ScR-1E.png',
            'lore' => 'When Normal or Special Summoned, your opponent s Spell/Trap Cards and effects cannot be activated. Once per turn: You can Set 1 \ Abyss Script\  Spell Card directly from your Deck, but it is sent to the Graveyard during the End Phase.',
        ]);
    }
}
