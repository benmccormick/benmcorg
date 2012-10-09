from django.shortcuts import render_to_response, get_object_or_404
from django.core.paginator import Paginator, EmptyPage, PageNotAnInteger
from blog.models import Post

def index(request):
	pager = Paginator(Post.objects.all().order_by('-pub_date'),5)
	page = pager.page(1)
    #latest_post_list = Post.objects.all().order_by('-pub_date')[:5]
   	return render_to_response('posts/index.html', {'page': page})

def posts(request,page_num):
	pager = Paginator(Post.objects.all().order_by('-pub_date'),5)
	try:
		page = pager.page(page_num)
	except PageNotAnInteger:
		page = pager.page(1)
	except EmptyPage:
		page = pager.page(pager.num_pages)

   	return render_to_response('posts/index.html', {'page': page})

def permalink(request,post_slug):
    p = get_object_or_404(Post, slug=post_slug)
    return render_to_response('posts/permalink.html', {'post':p})

def resume(request):
    return render_to_response('resume/resume.html')

def webdev(request):
    return render_to_response('info/webdev.html')
