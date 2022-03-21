<?php
/**
 * Author : Abhijth Shetty
 * Date   : 15-01-2018
 * Desc   : This is a controller file for masterLevelUpList Action
 */
class masterLevelUpListAction extends baseAction{
	/**
   * @OA\Get(path="?methodName=master.levelUpList", tags={"Cards"}, 
   * @OA\Parameter(parameter="applicationKey", name="applicationKey", description="The applicationKey specific to this event",
   *   @OA\Schema(type="string"), in="query", required=false),
   * @OA\Parameter(parameter="user_id", name="user_id", description="The user ID specific to this event",
   *   @OA\Schema(type="string"), in="query", required=false),
   * @OA\Parameter(parameter="access_token", name="access_token", description="The access_token specific to this event",
   *   @OA\Schema(type="string"), in="query", required=false),
   * @OA\Response(response="200", description="Success, Everything worked as expected"),
   * @OA\Response(response="201", description="api_method does not exists"),
   * @OA\Response(response="202", description="The requested version does not exists"),
   * @OA\Response(response="203", description="The requested request method does not exists"),
   * @OA\Response(response="204", description="The auth token is invalid"),
   * @OA\Response(response="205", description="Response code failure"),
   * @OA\Response(response="206", description="paramName should be a Valid email address"),
   * @OA\Response(response="216", description="Invalid Credential, Please try again."),
   * @OA\Response(response="228", description="error"),
   * @OA\Response(response="231", description="Device token is mandatory."),
   * @OA\Response(response="232", description="Custom Error"),
   * @OA\Response(response="245", description="Player is offline"),
   * @OA\Response(response="404", description="Not Found")
   * )
   */
  public function execute()
  {
    $masterLib = autoload::loadLibrary('queryLib', 'master');
    $result = array();

    $masterList = $masterLib->getMasterLevelUpList();

    foreach ($masterList as $master)
    {
      $temp = array();
      $temp['master_level_up_id'] = $master['master_level_up_id'];
      $temp['level_id'] = $master['level_id'];
      $temp['xp_to_next_level'] = $master['xp_to_next_level'];
      $temp['god_tower_damage'] = $master['god_tower_damage'];
      $temp['stadium_tower_damage'] = $master['stadium_tower_damage'];
      $temp['god_tower_health'] = $master['god_tower_health'];
      $temp['stadium_tower_health'] = $master['stadium_tower_health'];
      $temp['god_tower_hit_speed'] = $master['god_tower_hit_speed'];
      $temp['god_tower_range'] = $master['god_tower_range'];
      $temp['stadium_tower_hit_speed'] = $master['stadium_tower_hit_speed'];
      $temp['stadium_tower_range'] = $master['stadium_tower_range'];

      $result[] = $temp;
    }

    $this->setResponse('SUCCESS');
    return array('master_list' => $result);
  }
}
