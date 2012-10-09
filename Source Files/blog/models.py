from django.db import models

class Category(models.Model):
	name = models.CharField(max_length=100)
	def __unicode__(self):
    		return self.name

class Post(models.Model):
    title = models.CharField(max_length=200)
    content = models.TextField()
    pub_date = models.DateTimeField('date published')
    slug = models.SlugField(unique=True)
    category = models.ForeignKey(Category)
    tags = models.ManyToManyField('Tag', blank=True)
    def __unicode__(self):
        return self.title

class Tag(models.Model):
    name = models.CharField(max_length=30)
    posts = models.ManyToManyField(Post, through=Post.tags.through, blank=True)
    def __unicode__(self):
        return self.name

class RelatedLink(models.Model):
	post = models.ForeignKey(Post)
	name = models.CharField(max_length=100)
	url = models.URLField(max_length=200)
	internal = models.BooleanField()
	def __unicode__(self):
    		return self.name
