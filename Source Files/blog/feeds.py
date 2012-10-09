from blog.models import Post
from django.contrib.syndication.views import Feed

class BlogFeed(Feed):
	title ="benmccormick.org"
	link = "/"
	description = "The personal blog of Ben McCormick"

	def items(self):
		return Post.objects.order_by('-pub_date')[:5]

	def item_title(self,item):
		return item.title
	def item_description(self, item):
		return (item.content+'...')
	def item_link(self,item):
		return "http://www.benmccormick.org/post/"+item.slug


