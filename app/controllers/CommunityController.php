<?php
class CommunityController extends BaseController {
    public function index($id) {
        $community = Community::findOrFail($id);
        $is_follower = false;
        $follower = $community->followers()
            ->where('user_id', '=', Auth::id())->get()->first();

        $is_follower = $follower ? true : false;
        $followers = $community->followers()->get();

        return View::make('community.index')
            ->with('model', $community)
            ->with('is_follower', $is_follower)
            ->with('followers', $followers);
    }

    public function follow($id) {
        $user = Auth::user();
        $community = Community::findOrFail($id);
        $community->followers()->sync([$user->id], false);
        $community->members = $community->followers()->count();
        $community->save();

        return Response::json([
            'members'=>$community->members
        ], 200);
    }

    public function unfollow($id) {
        $user = Auth::user();
        $community = Community::findOrFail($id);
        $community->followers()->detach($user->id);
        $community->members = $community->followers()->count();
        $community->save();

        return Response::json([
            'members'=>$community->members
        ], 200);
    }

    public function members($id) {
        $community = Community::findOrFail($id);
        $members = $community->followers()->get();

        return Response::json($members, 200);
    }

    public function questions($id) {
        $community = Community::findOrFail($id);
        $questions = $community->questions()->with('user')->get();
        // print_r(DB::getQueryLog());

        return Response::json($questions, 200);
    }
}
