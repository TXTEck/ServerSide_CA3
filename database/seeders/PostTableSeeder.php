<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PostTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->delete();
        $content = <<<EOT
AGENT UPDATES
Chamber

We’ve updated Chamber’s voice lines and added interaction lines with Reyna, Astra, and Omen.
Cypher

Since his updates in 7.09, we’ve been excited to see Cypher solidify a stronger spot on the Sentinel roster, but feel it’s pushed his stalling power further than we’d like for an Agent that specializes in global information. Additionally, we’ve seen play patterns around Spycam (E) that lack counterplay for the enemy team.

Updates to Cypher’s Trapwire (C) gives enemies more time to deal with it after it has been triggered while the reduction in slow duration provides those caught a slightly better chance to use movement to avoid death.
Trapwire (C)
Re-arm time increased 1 >>> 2s
Slow on Trapwire reduced 2 >>> 1.25s
We’ve seen it become common for Cyphers’ to hide Spycams (E) in the playspace and continually watch enemies without them knowing. We’ve added an audio telegraph for enemies who are being watched to provide those who are quietly moving a cue that they are being watched.
Spycam (E)
Enemies now hear looping audio when they are actively being watched by Cypher from within the Spycam (E).
Viper

As you have continued to improve leveraging Viper’s strengths, she’s grown into a dominant meta force and constant presence in pro play. With this update, we hope to solidify clear weaknesses that Viper has compared to her peers while still maintaining her unique identity as a Controller / Sentinel hybrid. You should feel that Viper has to commit to her positions and manage shorter individual up times per smoke use with her unique ability to control her smoke over time.

Reduction in total smoke uptime coupled with reduction in the cooldown of reactivating aim to reduce her total stalling uptime and push you to better manage your fuel. Increasing the minimum fuel to activate her smokes creates a larger window for enemies to attack when her fuel is fully drained.
Poison Cloud (Q) only being retrievable in the Buy Phase pushes you to make sharper calls of where you’ll place the ability each round and sharpen her identity of high influence in a highly committed area.
Reducing Snake Bite (C) to a single charge reduces how often Viper can use the ability to fill the gaps while her smokes are down and increases the importance of fuel management. The increase in duration ensures that a single Snake Bite (C) charge is lethal to all enemies that are in the acid for its full duration.
We messaged this out on socials but want to call out again that in 7.09 we unintentionally shipped some number changes to Viper’s fuel. For full visibility, you’ll see three numbers in some of the changes listed below: First will be before 7.09, second after 7.09, and the final is the update for 8.08.

Toxic Screen (E) and Poison Cloud (Q)
Max uptime on each individual smoke source reduced 15 >>> 13.5 >>> 12s
Minimum fuel needed to activate smoke increased 20% >>> 30%
Cooldown on re-activating smokes after putting them down reduced 8 >>> 5.5 >>> 5s
Poison Cloud (Q)
Can now only be picked up during the Buy Phase
Snake Bite (C)
Charges reduced 2 >>> 1
Price increased 200 >>> 300
Duration increased 5.5 >>> 6.5s
PREMIER UPDATES
A new Stage of Premier starts! With this one, we’re adding promotion.

See your division's promotion requirements on the standings page.
Meet those requirements to be placed at least one division higher in Stage E9A1.
The Premier Score playoff qualification threshold is 600 for all divisions.
BUG FIXES
Agent
Fixed issues related to inaccurate line-of-sight checks near certain abilities (e.g., Phoenix’s Blaze (C)). This could manifest in flashes not working appropriately when the detonation was on the other side of a wall that was in the process of raising or lowering.
This fix applies to Phoenix’s Blaze (C), Neon’s Fast Lane (C), Harbor’s High Tide (E), and Viper’s Toxic Screen (E) and Viper’s Pit (X).
Fixed an issue where AI-controlled abilities (e.g., Killjoy’s Turret (E)) could detect you through Harbor’s High Tide (E).
Fixed Clove’s icons being incorrect when Ruse (E) was equipped.
Fixed a bug where Cypher’s Trapwire (C) showed on the map even when disabled.
Maps
Fixed an exploit on Split that allowed Agents to stand on a sign on A Site.
Gameplay Systems
Fixed an issue where footsteps were not produced when in ADS and when running while slowed by Sage’s Slow Orb (Q).
Premier
Fixed a bug where practice matches did not lock your division in.
EOT;

        DB::table('posts')->insert([
            [
                'user_id' => 2,
                'title' => 'VALORANT PATCH NOTES 8.08',
                'description' => 'Changes made in the latest patch',
                'content' => $content,
                'image_path' => 'images/valorantimage.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}