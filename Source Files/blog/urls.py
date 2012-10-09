from django.conf.urls import patterns, include, url
from blog.feeds import BlogFeed

urlpatterns = patterns('blog.views',
    url(r'^feed/$', BlogFeed()),
    url(r'^$', 'index'),
    url(r'^(?P<page_num>\d+)/$', 'posts'),
    url(r'^post/(?P<post_slug>\S+)/$', 'permalink'),
    url(r'^resume','resume'),
    url(r'^webdev','webdev'),
)