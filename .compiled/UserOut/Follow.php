<?php

namespace PhoNetworksAutogenerated\UserOut 
{

use Pho\Kernel\Traits\Edge\PersistentTrait;
use Pho\Framework;
use Pho\Kernel\Foundation;



/*****************************************************
 * This file was auto-generated by pho-compiler
 * For more information, visit http://phonetworks.org
 ******************************************************/

class Follow extends Foundation\ActorOut\Subscribe {

    
    use PersistentTrait;
    

    const HEAD_LABEL = "follow";
    const HEAD_LABELS = "follows";
    const TAIL_LABEL = "follower";
    const TAIL_LABELS = "followers";
    

    const SETTABLES_EXTRA = [\PhoNetworksAutogenerated\User::class];
    


}

/* Predicate to load as a partial */
class FollowPredicate extends Foundation\ActorOut\SubscribePredicate
{
    protected $binding = false;
    protected $multiplicable = false;
    
    const T_CONSUMER = true;
    const T_NOTIFIER = false;
    const T_SUBSCRIBER = false;
    const T_FORMATIVE = false;
    const T_PERSISTENT = true;
}
/* Notification to load if it's a subtype of write or mention. */

}

/*****************************************************
 * Timestamp: 
 * Size (in bytes): 1291
 * Compilation Time: 7778
 * 6f8dad11bdc6f52d96cadc0a86c6b157
 ******************************************************/