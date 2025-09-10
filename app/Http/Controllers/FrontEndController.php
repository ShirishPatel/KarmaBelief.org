<?php
namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class FrontEndController extends Controller
{
    public function index()
    {

        $services = DB::table('home_services')->first();

        $categories = DB::table('case_study_categories')
            ->where('status', '1')
            ->get();

        $heroSection = DB::table('home_hero_sections')->first();
        $causes = DB::table('our_values_sections')->first();
        $causeValues = DB::table('our_values')->get();
        $smartSolution = DB::table('smart_solutions')->first();
        $solutions = DB::table('solutions')->where('status', '1')->get();
        $donations = DB::table('client_stories_section')->where('client_status', '1')->get();

        return view('frontend.home', compact(
            'services',
            'categories',
            'heroSection',
            'causes',
            'causeValues',
            'smartSolution',
            'solutions',
            'donations',
        ));
    }
    public function about_us()
    {
        return view('frontend.about-us');
    }
    public function services()
    {
        return view('frontend.services');
    }
    public function service_details()
    {
        return view('frontend.service-details');
    }
    public function case_study()
    {
        return view('frontend.case-study');
    }
    public function case_study_details()
    {
        return view('frontend.case-study-details');
    }

    public function blog(Request $request)
    {
        $search = $request->input('search');

        $blogs = DB::table('blogs')
            ->where('status', '1')
            ->when($search, function ($query, $search) {
                return $query->where('blog_title', 'like', '%' . $search . '%')
                    ->orWhere('blog_description', 'like', '%' . $search . '%');
            })
            ->orderByDesc('id')
            ->paginate(1);

        $recentBlogs = DB::table('blogs')->where('status', '1')->latest()->take(5)->get();

        return view('frontend.blogs', compact('blogs', 'recentBlogs'));
    }

    // public function blog_show($id)
    // {

    //     return view('frontend.blog_show');
    // }

    public function blog_show($blog_slug)
    {
        $blog = DB::table('blogs')->where('blog_slug', $blog_slug)->first();
        $categoryIds = explode(',', $blog->category_id);
        $categories = DB::table('blog_categories')
            ->whereIn('id', $categoryIds)
            ->pluck('category_name');

        return view('frontend.blog_show', compact('blog', 'categories'));

    }

    public function contact_us()
    {
        return view('frontend.contact-us');
    }
    public function contact_store(Request $request)
    {

        $request->validate(
            [
                'name' => 'required|regex:/^[A-Za-z\s]+$/',
                'phone' => ['required', 'regex:/^\+?[0-9, ]+$/', 'max:15'],
                'subject_name' => [
                    'required',
                    'string',
                ],
                'email' => 'required|email',
                'massage' => [
                    'required',
                    'string',
                    'max:1000',
                    'not_regex:/http[s]?:\/\/|www\.|<script|javascript:/i',
                ],
            ],
            [
                'name.required' => 'Enter your name.',
                'phone.required' => 'Enter your phone number.',
                'email.required' => 'Enter your email.',
                'subject_name.required' => 'Enter your Subject.',
                'massage.required' => 'Enter your message.',
            ]
        );

        try {
            $data = [
                'name' => $request->name,
                'phone' => $request->phone,
                'subject_name' => $request->subject_name,
                'email' => Str::lower($request->email),
                'massage' => $request->massage,
                'created_at' => now(),
                'updated_at' => now(),

            ];

            Mail::to(siteConfig()->email)->send(new ContactFormMail($data));
            DB::table('contacts')->insert($data);

            return redirect()->back()->with('success', 'Message has been sent successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function homeOne()
    {
        return view('frontend.home_one');
    }
    public function cust_devel()
    {
        return view('frontend.custom_development');
    }
    public function case_study_detail($slug)
    {
        $record = DB::table('projects')->where('slug', $slug)->first();
        $relateds = DB::table('projects')->whereNot('slug', $slug)->get();
        return view('frontend.case_study_detail', compact('record', 'relateds'));
    }
    public function ai_ml()
    {
        return view('frontend.ai_ml');
    }
    public function dynamic()
    {
        return view('frontend.dynamic_solutions');
    }

    public function terms_condition($slug)
    {
        $records = DB::table('terms')->where('terms_slug', $slug)->first();
        return view('frontend.terms_condition', compact('records'));
    }

}
